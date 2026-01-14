<footer class="footer px-16">
    <div class="footer__top flex flex-col gap-6 md:flex-row md:items-center md:justify-between">
        <div class="footer__brand">
            <img src="{{ asset('Frame.svg') }}" alt="Sparkle Cloud" class="footer__logo h-auto w-full max-w-full object-contain ">
            {{-- <div>
                <p class="footer__brand-name">SPARKLE</p>
                <p class="footer__brand-sub">CLOUD</p>
            </div> --}}
        </div>
        <div class="footer__nav flex flex-wrap gap-4 md:gap-6">
            <a href="#">Modules</a>
            <a href="#">Pricing</a>
            <a href="#">Cases</a>
            <a href="#">Blog</a>
            <a href="#">About</a>
            <a href="#">Contact</a>
        </div>
    </div>

    <div class="footer__divider"></div>

    <div class="footer__mid flex flex-col gap-6 md:flex-row md:items-center md:justify-between">
        <div class="footer__contact flex flex-wrap items-center gap-3">
            <span class="footer__icon">
                <img src="{{ asset('Vector.png') }}" alt="Email" class="h-auto w-full max-w-full object-contain sm:max-w-[16px]">
            </span>
            <a href="mailto:"><span>info@sparklecoloud.com</span></a>
            <span class="footer__icon">
                <img src="{{ asset('Group (1).png') }}" alt="Phone" class="h-auto w-full max-w-full object-contain sm:max-w-[16px]">
            </span>
            <a href="tel:+"><span>+31(0) 23-5574211</span></a>
        </div>
        <div class="footer__social flex items-center gap-4">
            <a href="#"><img src="{{ asset('u_facebook-f.png') }}" alt="Facebook" class="h-auto w-full max-w-full object-contain sm:max-w-[16px]"></a>
            <a href="#"><img src="{{ asset('Vector (1).png') }}" alt="Twitter" class="h-auto w-full max-w-full object-contain sm:max-w-[16px]"></a>
            <a href="#"><img src="{{ asset('Vector (2).png') }}" alt="LinkedIn" class="h-auto w-full max-w-full object-contain sm:max-w-[16px]"></a>
        </div>
    </div>

    <div class="footer__divider"></div>

    <div class="footer__bottom flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
        <div class="footer__links flex flex-wrap gap-4">
            <a href="#">General conditions</a>
            <a href="#">Privacy statement</a>
            <a href="#">Disclaimer</a>
        </div>
        <div class="footer__copyright">
            Copyright © 2025 Sparkle by <span class="footer__highlight">Brightness</span>
        </div>
    </div>
</footer>
