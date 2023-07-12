<section class="page-title"
    style="background-image:url({{ Vite::asset('resources/assets/images/background/pattern-16.png') }})">
    <div class="auto-container">
        <h2>{{ $pageTitle }}</h2>
        {{-- <ul class="bread-crumb clearfix">
            <li><a href="index.html">Home</a></li>
            <li>{{ $pageTitle }}</li>
        </ul> --}}

        <livewire:frontend.user.breadcrumbs />

    </div>
</section>
