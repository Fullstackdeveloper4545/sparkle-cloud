<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Sparkle Cloud | Prices</title>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Syne:wght@400..800&display=swap" rel="stylesheet">

       @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/hero-three.js'])
    </head>
    <body class="min-h-screen overflow-x-hidden bg-[#0b0b0e] text-white antialiased">
        <div class="prices-page w-full pt-6">
            <x-header />

            <section class="contact-hero">
                <div class="contact-hero__toggle">
                    <button class="contact-hero__pill contact-hero__pill--active">Contact</button>
                    <button class="contact-hero__pill">Let's Get In Touch</button>
                </div>

                <h1 class="contact-hero__title">How Can We Help You?</h1>
            </section>

            <section class="contact-grid">
                <div class="contact-card contact-card--info">
                    <p class="contact-card__lead">
                        Have questions about Sparkle Cloud? We have over 20 years of experience and are happy to help.
                    </p>
                    <p class="contact-card__lead">
                        You can contact us via the contact form or schedule an appointment directly in our calendar.
                        Of course you can also call or WhatsApp.
                    </p>

                    <div class="contact-info card2">
                        <div class="contact-info__row">
                            <span>Call</span>
                            <span>+31 (0)23 557 4211</span>
                        </div>
                    
                        <div class="contact-info__row">
                            <span>WhatsApp with</span>
                            <span>Open WhatsApp</span>
                        </div>
                        <div class="contact-info__row">
                            <span>Schedule a meeting</span>
                            <span>Calendly</span>
                        </div>
                    </div>

                    <div class="contact-address card2">
                        <div class="contact-address__block">
                            <h4>Main address</h4>
                            <p>Head office</p>
                            <p>Brightness Netherlands, Graftermeerstraat 22C, 2131AC Hoofddorp, The Netherlands.</p>
                        </div>
                        <div class="contact-address__block">
                            <h4>Other locations</h4>
                            <p>Brightness India, Ahmedabad, India.</p>
                        </div>
                    </div>
                </div>

                <div class="contact-card contact-card--form">
                    <h2 class="text-center">Let's co<span class="text-[#999999]">nnect &amp; </span><br>help you <span class="text-[#999999]">succeed</span></h2>
                    <form class="contact-form">
                        <label>
                            <span>Full Name</span>
                            <input type="text" placeholder="Benjamin Carter" />
                        </label>
                        <label>
                            <span>Email</span>
                            <input type="email" placeholder="info@example.com" />
                        </label>
                        <label>
                            <span>Subject</span>
                            <input type="text" placeholder="I would like to discuss" />
                        </label>
                        <label>
                            <span>Phone</span>
                            <input type="text" placeholder="+1 (000) 56 88 99" />
                        </label>
                        <label class="contact-form__message">
                            <span>Message</span>
                            <textarea placeholder="Write message"></textarea>
                        </label>
                        <button type="submit" class="contact-form__submit sign-in-flare"><span class="inner w-full">Submit</span></button>
                    </form>
                </div>
            </section>

            <section class="contact-map">
                <iframe
                    title="Sparkle Cloud map"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2436.54671571975!2d4.6909042!3d52.3005529!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c5e61f6a47c1b9%3A0x8b9b0c76e0c9139b!2sHoofddorp%2C%20Netherlands!5e0!3m2!1sen!2snl!4v1719300000000"
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </section>
        <x-footer />
        </div>
    </body>
</html>
