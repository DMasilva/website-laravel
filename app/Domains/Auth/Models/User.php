<?php

namespace App\Domains\Auth\Models;

use App\Models\Bank;
use App\Models\UserOtp;
use App\Models\IndividualPoint;
use Laravel\Sanctum\HasApiTokens;
use App\Notifications\SendEmailOtp;
use Database\Factories\UserFactory;
use App\Notifications\SendMobileOtp;
use Illuminate\Support\Facades\Auth;
use App\Notifications\SendInviteMail;
use App\Notifications\VerifyEmailOtp;
use App\Notifications\SendWelcomeMail;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use Lab404\Impersonate\Models\Impersonate;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Domains\Auth\Models\Traits\Scope\UserScope;
use App\Domains\Auth\Models\Traits\Method\UserMethod;
use DarkGhostHunter\Laraguard\TwoFactorAuthentication;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Domains\Auth\Notifications\Frontend\VerifyEmail;
use App\Domains\Auth\Models\Traits\Attribute\UserAttribute;
use Illuminate\Auth\MustVerifyEmail as MustVerifyEmailTrait;
use App\Domains\Auth\Models\Traits\Relationship\UserRelationship;
use DarkGhostHunter\Laraguard\Contracts\TwoFactorAuthenticatable;
use App\Domains\Auth\Notifications\Frontend\ResetPasswordNotification;

/**
 * Class User.
 */
class User extends Authenticatable implements MustVerifyEmail, TwoFactorAuthenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasRoles;
    use Impersonate;
    use MustVerifyEmailTrait;
    use Notifiable;
    use SoftDeletes;
    use TwoFactorAuthentication;
    use UserAttribute;
    use UserMethod;
    use UserRelationship;
    use UserScope;

    public const TYPE_ADMIN = 'admin';

    public const TYPE_USER = 'user';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'type',
        'name',
        'email',
        'email_verified_at',
        'password',
        'password_changed_at',
        'active',
        'timezone',
        'last_login_at',
        'last_login_ip',
        'to_be_logged_out',
        'provider',
        'provider_id',
        'last_name',
        'gender',
        'designation',
        'bank_id',
        'mobile_number',
        'mobile_verified_at',
        'tnc_accepted_at',
        'invited_by',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * @var array
     */
    protected $dates = [
        'last_login_at',
        'email_verified_at',
        'password_changed_at',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'active' => 'boolean',
        'last_login_at' => 'datetime',
        'email_verified_at' => 'datetime',
        'to_be_logged_out' => 'boolean',
        'tnc_accepted_at' => 'datetime',
    ];

    /**
     * @var array
     */
    protected $appends = [
        'avatar',
    ];

    /**
     * @var string[]
     */
    protected $with = [
        'permissions',
        'roles',
    ];

    /**
     * Send the password reset notification.
     *
     * @param  string  $token
     * @return void
     */
    public function sendPasswordResetNotification($token): void
    {
        $this->notify(new ResetPasswordNotification($token));
    }

    /**
     * Send the registration verification email.
     */
    public function sendEmailVerificationNotification(): void
    {
        $this->notify(new VerifyEmail());
    }

    /**
     * Send the OTP verification email.
     */
    public function sendEmailOTPVerificationNotification($otp): void
    {
        $this->notify(new SendEmailOtp($otp, $this->full_name));
    }

    /**
     * Send the OTP verification SMS.
     */
    public function sendMobileOTPVerificationNotification($otp): void
    {
        $this->notify(new SendMobileOtp($otp));
    }

    /**
     * Send WelcomeMai.
     */
    public function sendWelcomeMailNotification(): void
    {
        $this->notify(new SendWelcomeMail($this->full_name));
    }

    /**
     * Return true or false if the user can impersonate an other user.
     *
     * @param void
     * @return bool
     */
    public function canImpersonate(): bool
    {
        return $this->can('admin.access.user.impersonate');
    }

    /**
     * Return true or false if the user can be impersonate.
     *
     * @param void
     * @return bool
     */
    public function canBeImpersonated(): bool
    {
        return !$this->isMasterAdmin();
    }

    /**
     * Create a new factory instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    protected static function newFactory()
    {
        return UserFactory::new();
    }

    public function invitedBy()
    {
        return $this->belongsTo(self::class, 'invited_by', 'id');
    }

    public function getFullNameAttribute()
    {
        $full_name = $this->name.' '.$this->last_name;

        return $full_name;
    }

    public function bank()
    {
        return $this->belongsTo(Bank::class);
    }

    public function getCoinsAttribute()
    {
        return IndividualPoint::where('user_id', $this->id)->where('type', 'coins')->sum('points');
    }

    public function getDiamondsAttribute()
    {
        return IndividualPoint::where('user_id', $this->id)->where('type', 'diamond')->sum('points');
    }

    public function rubbies()
    {
        return $this->hasMany(IndividualPoint::class);
    }

    public function getTotalRubbiesAttribute()
    {
        return $this->rubbies->where('type', 'coins')->sum('points');
    }
}
