<section id="contact" class="full-height px-lg-5">
    <div class="container">

        <div class="row justify-content-center text-center">
            <div class="col-lg-8 pb-4" data-aos="fade-up">
                <h6 class="text-uppercase text-brand">{{ __('homepage.contact-section.title') }}</h6>
                <h2>{{ __('homepage.contact-section.subtitle') }}
                </h2>
            </div>

            <div class="col-lg-8" data-aos="fade-up" data-aos-delay="300">
                <form id="emailForm" class="row g-lg-3 gy-3" action="https://formspree.io/f/xgegjkpr" method="POST">
                    <div class="form-group col-md-6">
                        <input type="text" id="form-name" class="form-control"
                            placeholder="{{ __('homepage.contact-section.form-contact.name-placeholder') }}"
                            name="name" autocomplete="given-name" required>
                    </div>
                    <div class="form-group col-md-6">
                        <input type="email" id="form-email" class="form-control"
                            placeholder="{{ __('homepage.contact-section.form-contact.email-placeholder') }}"
                            name="email" autocomplete="off" required>
                    </div>
                    <div class="form-group col-12">
                        <input type="text" id="form-subject" class="form-control"
                            placeholder="{{ __('homepage.contact-section.form-contact.subject-placeholder') }}"
                            name="subject" required>
                    </div>
                    <div class="form-group col-12">
                        <textarea id="form-msg" rows="4" class="form-control"
                            placeholder="{{ __('homepage.contact-section.form-contact.message-placeholder') }}" name="message" required></textarea>
                    </div>
                    <div class="form-group col-12 d-grid">
                        <button type="submit" id="form-submit"
                            class="text-uppercase btn btn-brand">{{ __('homepage.contact-section.form-contact.btn-contact_me') }}</button>
                    </div>
                </form>
            </div>
        </div>


    </div>
</section>
