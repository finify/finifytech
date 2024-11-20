@extends('home.layout.layout')

@section('content')
<!-- ...::: Hero Section Start :::... -->
<section class="section-hero">
    <div class="relative z-10 mt-[62px] bg-cover bg-center bg-no-repeat after:absolute after:inset-0 after:-z-10 after:bg-[#000937]/60 lg:mt-[100px]" style="background-image: url(/assets/img/finifybg.png);">
        <div class="py-20 md:py-[100px] xl:py-[150px]">
            <div class="container">
                <!-- Hero Area -->
                <div class="text-center text-[#FCF9F0]">
                    <h1 class="font-outfit text-5xl font-medium uppercase leading-none -tracking-[3px] sm:text-6xl md:text-7xl lg:text-8xl xl:text-9xl xxl:text-[140px]">
                        Enter the age of technology
                    </h1>
                    <p class="mx-auto mb-12 mt-6 max-w-3xl text-xl lg:text-2xl xl:max-w-5xl">
                        Our company is a beacon of innovation and progress in the
                        tech world. We design websites, apps, and digital
                        experiences to help clients grow and transform.
                    </p>
                    <div class="flex flex-wrap justify-center gap-6">
                        <a class='group inline-flex rounded border-2 border-[#001AA5] bg-[#001AA5] px-6 py-3 text-base font-bold text-white lg:px-8 xl:px-[42px]' href='contact.html'>
                            <div class="relative flex items-center justify-center overflow-hidden">
                                <span class="translate-y-0 transition-all duration-300 group-hover:-translate-y-full">Get In Touch</span>
                                <span class="absolute translate-y-full transition-all duration-300 group-hover:translate-y-0">Get In Touch</span>
                            </div>
                        </a>
                        <a class='group inline-flex rounded border-2 border-[#FCF9F0] bg-transparent px-6 py-3 text-base font-bold text-white lg:px-8 xl:px-[42px]' href='service.html'>
                            <div class="relative flex items-center justify-center overflow-hidden">
                                <span class="translate-y-0 transition-all duration-300 group-hover:-translate-y-full">Explore Our Services</span>
                                <span class="absolute translate-y-full transition-all duration-300 group-hover:translate-y-0">Explore Our Services</span>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- Hero Area -->
            </div>
        </div>
    </div>
    <!-- Hero Space -->
</section>
<!-- ...::: Hero Section End :::... -->

<!-- ...::: Fun-fact Section Start :::... -->
<section class="section-fun-fact">
    <!-- Section Space -->
    <div class="section-space">
        <!-- Section Container -->
        <div class="container">
            <!-- Section Block -->
            <div class="mb-10 md:mb-[60px] lg:mb-20">
                <h3 class="jos max-w-2xl font-outfit text-3xl font-medium leading-tight text-[#000937] md:text-4xl lg:text-[50px]">
                    Our professionalism can be quantified by the numbers
                </h3>
            </div>
            <!-- Section Block -->

            <!-- Counter List -->
            <ul class="grid grid-cols-1 gap-8 text-[#000937] md:grid-cols-3 xl:gap-32">
                <!-- Counter Item -->
                <li>
                    <span class="block font-outfit text-2xl font-medium">Verified client review rate</span>
                    <div class="my-4 h-px w-full bg-current"></div>
                    <div class="font-outfit text-6xl font-medium leading-none -tracking-[3px] md:text-7xl xl:text-[110px]" data-module="countup">
                        <span class="start-number" data-countup-number="4.8">4.8</span>/5
                    </div>
                </li>
                <!-- Counter Item -->
                <!-- Counter Item -->
                <li>
                    <span class="block font-outfit text-2xl font-medium">Experienced engineers</span>
                    <div class="my-4 h-px w-full bg-current"></div>
                    <div class="font-outfit text-6xl font-medium leading-none -tracking-[3px] md:text-7xl xl:text-[110px]" data-module="countup">
                        <span class="start-number" data-countup-number="20">20</span>+
                    </div>
                </li>
                <!-- Counter Item -->
                <!-- Counter Item -->
                <li>
                    <span class="block font-outfit text-2xl font-medium">Annual growth in renewals</span>
                    <div class="my-4 h-px w-full bg-current"></div>
                    <div class="font-outfit text-6xl font-medium leading-none -tracking-[3px] md:text-7xl xl:text-[110px]" data-module="countup">
                        <span class="start-number" data-countup-number="200">200</span>%
                    </div>
                </li>
                <!-- Counter Item -->
            </ul>
            <!-- Counter List -->
        </div>
        <!-- Section Container -->
    </div>
    <!-- Section Space -->
</section>
<!-- ...::: Fun-fact Section End :::... -->

<!-- ...::: Content Section Start :::... -->
<section class="section-content">
    <!-- Section Space -->
    <div class="section-space-bottom pt-[50px]">
        <!-- Section Container -->
        <div class="container">
            <!-- Content Area -->
            <div class="grid grid-cols-1 items-center gap-14 md:grid-cols-[minmax(0,0.55fr)_1fr] lg:gap-[90px]">
                <!-- Content Left Block -->
                <div class="jos order-2 overflow-hidden rounded-[10px] md:order-1" data-jos_animation="fade-right">
                    <img src="/assets/img/aboutimage.png" alt="content-img-1" width="450" height="550" class="h-auto w-full" />
                </div>
                <!-- Content Left Block -->

                <!-- Content Right Block -->
                <div class="jos order-1 md:order-2" data-jos_animation="fade-left">
                    <!-- Section Block -->
                    <div class="mb-[30px] text-[#000937]">
                        <h2 class="font-outfit text-5xl font-medium leading-none lg:text-6xl lg:-tracking-[3px] xl:text-7xl xxl:text-[110px]">
                            Solve complex problems simply
                        </h2>
                        <p class="mt-6 font-outfit text-xl font-medium lg:text-2xl">
                            We thrive on complexity reduce it to simplicity, creating
                            products & services that enable individuals and businesses
                            alike to adapt to the rapidly changing technology
                            landscape.
                        </p>
                    </div>
                    <!-- Section Block -->
                    <p>
                        We also believe that technology will not only meet today's
                        needs but also anticipate tomorrow's challenges. Our diverse
                        & highly skilled team is driven by a shared passion to push
                        the boundaries of what is possible. We are committed to
                        creating products and services.
                    </p>
                </div>
                <!-- Content Right Block -->
            </div>
            <!-- Content Area -->
        </div>
        <!-- Section Container -->
    </div>
    <!-- Section Space -->
</section>
<!-- ...::: Content Section End :::... -->

<!-- ...::: Service Section Start :::... -->
<section class="section-service">
    <!-- Section Background -->
    <div class="bg-[#001AA5]">
        <!-- Section Space -->
        <div class="section-space">
            <!-- Section Container -->
            <div class="container">
                <!-- Section Block -->
                <div class="mx-auto mb-10 max-w-xl text-center text-[#FCF9F0] md:mb-[60px] lg:mb-20 lg:max-w-2xl xxl:max-w-4xl">
                    <h2 class="font-outfit text-5xl font-medium leading-none lg:text-6xl lg:-tracking-[3px] xl:text-7xl xxl:text-[110px]">
                        We are passionate about what we do
                    </h2>
                </div>
                <!-- Section Block -->
            </div>
            <!-- Section Container -->

            <!-- Service List -->
            <ul>
                <!-- Service Item -->
                <li class="jos group" onmouseover="showImage(event)">
                    <div class="transition-all duration-300 group-hover:bg-[#000937]">
                        <!-- Content Block -->
                        <div class="round-[5px] container grid grid-cols-1 items-center gap-6 py-[30px] text-[#FCF9F0] transition-all md:grid-cols-[1fr_1fr_50px]">
                            <a class='font-outfit text-3xl font-medium md:text-4xl xxl:text-[50px]' href='#'>Software Development</a>
                            <p class="para-lg max-w-[526px]">
                                Build custom software for your unique needs with
                                front-end and back-end technologies.
                            </p>
                            <a href='#'>
                                <img src="/assets/img/icons/icon-buttery-white-solid-arrow-right.svg" alt="icon-buttery-white-solid-arrow-right" width="50" height="49" />
                            </a>
                        </div>
                        <!-- Content Block -->
                    </div>

                    <!-- Image Block -->
                    <img src="/assets/img/images/th-8/service-img-1.png" alt="project-hover-img-1" width="300" height="250" class="hover-on-image top-0 hidden h-auto w-[300px] transition-transform duration-300 ease-in-out" />
                    <!-- Image Block -->
                </li>
                <!-- Service Item -->
                <!-- Service Item -->
                <li class="jos group" onmouseover="showImage(event)">
                    <div class="transition-all duration-300 group-hover:bg-[#000937]">
                        <!-- Content Block -->
                        <div class="round-[5px] container grid grid-cols-1 items-center gap-6 py-[30px] text-[#FCF9F0] transition-all md:grid-cols-[1fr_1fr_50px]">
                            <a class='font-outfit text-3xl font-medium md:text-4xl xxl:text-[50px]' href='#'>UX/UI Design</a>
                            <p class="para-lg max-w-[526px]">
                                Create beautiful, pixel-perfect, and easy-to-use designs
                                that delight your end users.
                            </p>
                            <a href='#'>
                                <img src="/assets/img/icons/icon-buttery-white-solid-arrow-right.svg" alt="icon-buttery-white-solid-arrow-right" width="50" height="49" />
                            </a>
                        </div>
                        <!-- Content Block -->
                    </div>

                    <!-- Image Block -->
                    <img src="/assets/img/images/th-8/service-img-2.png" alt="project-hover-img-2" width="300" height="250" class="hover-on-image top-0 hidden h-auto w-[300px] transition-transform duration-300 ease-in-out" />
                    <!-- Image Block -->
                </li>
                <!-- Service Item -->
                <!-- Service Item -->
                <li class="jos group" onmouseover="showImage(event)">
                    <div class="transition-all duration-300 group-hover:bg-[#000937]">
                        <!-- Content Block -->
                        <div class="round-[5px] container grid grid-cols-1 items-center gap-6 py-[30px] text-[#FCF9F0] transition-all md:grid-cols-[1fr_1fr_50px]">
                            <a class='font-outfit text-3xl font-medium md:text-4xl xxl:text-[50px]' href='#'>Mobile App Development</a>
                            <p class="para-lg max-w-[526px]">
                                Build high-performing, scalable and secure mobile apps
                                for iOS and Android devices.
                            </p>
                            <a href='#'>
                                <img src="/assets/img/icons/icon-buttery-white-solid-arrow-right.svg" alt="icon-buttery-white-solid-arrow-right" width="50" height="49" />
                            </a>
                        </div>
                        <!-- Content Block -->
                    </div>

                    <!-- Image Block -->
                    <img src="/assets/img/images/th-8/service-img-3.png" alt="project-hover-img-3" width="300" height="250" class="hover-on-image top-0 hidden h-auto w-[300px] transition-transform duration-300 ease-in-out" />
                    <!-- Image Block -->
                </li>
                <!-- Service Item -->
                <!-- Service Item -->
                <li class="jos group" onmouseover="showImage(event)">
                    <div class="transition-all duration-300 group-hover:bg-[#000937]">
                        <!-- Content Block -->
                        <div class="round-[5px] container grid grid-cols-1 items-center gap-6 py-[30px] text-[#FCF9F0] transition-all md:grid-cols-[1fr_1fr_50px]">
                            <a class='fo text-3xlnmd:t-medium font-outfit text-4xl xxl:text-[50px]' href='#'>AI Chatbot Development</a>
                            <p class="para-lg max-w-[526px]">
                                We build ChatGPT-trained chatbots and more that speak
                                your brand's language.
                            </p>
                            <a href='#'>
                                <img src="/assets/img/icons/icon-buttery-white-solid-arrow-right.svg" alt="icon-buttery-white-solid-arrow-right" width="50" height="49" />
                            </a>
                        </div>
                        <!-- Content Block -->
                    </div>

                    <!-- Image Block -->
                    <img src="/assets/img/images/th-8/service-img-4.png" alt="project-hover-img-3" width="300" height="250" class="hover-on-image top-0 hidden h-auto w-[300px] transition-transform duration-300 ease-in-out" />
                    <!-- Image Block -->
                </li>
                <!-- Service Item -->
                <!-- Service Item -->
                <li class="jos group" onmouseover="showImage(event)">
                    <div class="transition-all duration-300 group-hover:bg-[#000937]">
                        <!-- Content Block -->
                        <div class="round-[5px] container grid grid-cols-1 items-center gap-6 py-[30px] text-[#FCF9F0] transition-all md:grid-cols-[1fr_1fr_50px]">
                            <a class='fo text-3xlnmd:t-medium font-outfit text-4xl xxl:text-[50px]' href='#'>Data Engineering</a>
                            <p class="para-lg max-w-[526px]">
                                Find the insights you need to make decisions faster.
                                Manage your massive streams of data.
                            </p>
                            <a href='#'>
                                <img src="/assets/img/icons/icon-buttery-white-solid-arrow-right.svg" alt="icon-buttery-white-solid-arrow-right" width="50" height="49" />
                            </a>
                        </div>
                        <!-- Content Block -->
                    </div>

                    <!-- Image Block -->
                    <img src="/assets/img/images/th-8/service-img-5.png" alt="project-hover-img-3" width="300" height="250" class="hover-on-image top-0 hidden h-auto w-[300px] transition-transform duration-300 ease-in-out" />
                    <!-- Image Block -->
                </li>
                <!-- Service Item -->
            </ul>
            <!-- Service List -->

            <img src="/assets/img/images/th-8/service-img-1.png" alt="Hovered Project Image" class="hovered-image fixed -top-32 left-5 z-50 hidden h-[444px] w-[435px]" id="hoveredImage" />
        </div>
        <!-- Section Space -->
    </div>
    <!-- Section Background -->
</section>
<!-- ...::: Service Section End :::... -->

<!-- ...::: Content Section Start :::... -->
<section class="content-section">
    <!-- Section Space -->
    <div class="section-space">
        <!-- Section Container -->
        <div class="container">
            <!-- Content Area -->
            <div class="grid grid-cols-1 items-center gap-14 md:grid-cols-[1fr_minmax(0,0.6fr)] lg:gap-[100px]">
                <!-- Content Left Block -->
                <div class="jos" data-jos_animation="fade-left">
                    <!-- Section Block -->
                    <div class="mb-[30px] text-[#000937]">
                        <h2 class="font-outfit text-5xl font-medium leading-none lg:text-6xl lg:-tracking-[3px] xl:text-7xl xxl:text-[110px]">
                            Enhance lives with technology
                        </h2>
                        <p class="mt-6 font-outfit text-xl font-medium lg:text-2xl">
                            As a technology company, we’re critical to innovation,
                            economic growth &social progress to make life better &
                            more convenient.
                        </p>
                    </div>
                    <!-- Section Block -->
                    <!-- Content List -->
                    <ul class="para-lg mt-12 flex flex-col gap-y-6">
                        <!-- Content Item -->
                        <li class="flex items-center gap-6">
                            <img src="/assets/img/images/th-8/content-icon-img-1.png" alt="content-icon-img-1" width="50" height="50" />
                            <div class="flex-1">
                                <strong class="font-outfit font-medium">Expertise In Technology:</strong>
                                As an software engineering company, our technology team
                                consists of highly skilled professionals.
                            </div>
                        </li>
                        <!-- Content Item -->
                        <!-- Content Item -->
                        <li class="flex items-center gap-6">
                            <img src="/assets/img/images/th-8/content-icon-img-2.png" alt="content-icon-img-2" width="50" height="50" />
                            <div class="flex-1">
                                <strong class="font-outfit font-medium">Cost-Effectiveness:</strong>
                                The competitive pricing model we employ provides notable
                                cost savings while maintaining a high quality.
                            </div>
                        </li>
                        <!-- Content Item -->
                        <!-- Content Item -->
                        <li class="flex items-center gap-6">
                            <img src="/assets/img/images/th-8/content-icon-img-3.png" alt="content-icon-img-3" width="50" height="50" />
                            <div class="flex-1">
                                <strong class="font-outfit font-medium">Full Flexibility:</strong>
                                From a single developer to a fully integrated team, we
                                enjoy new challenges, are self-driven & proactive in
                                learning.
                            </div>
                        </li>
                        <!-- Content Item -->
                    </ul>
                    <!-- Content List -->
                </div>
                <!-- Content Left Block -->

                <!-- Content Right Block -->
                <div class="jos overflow-hidden rounded-[10px]" data-jos_animation="fade-right">
                    <img src="/assets/img/images/th-8/content-img-2.jpg" alt="content-img-2" width="450" height="550" class="h-auto w-full" />
                </div>
                <!-- Content Right Block -->
            </div>
            <!-- Content Area -->
        </div>
        <!-- Section Container -->
    </div>
    <!-- Section Space -->
</section>
<!-- ...::: Content Section End :::... -->

<!-- ...::: Working Process Section Start :::... -->
<section class="section-working-process">
    <!-- Section Space -->
    <div class="section-space-bottom">
        <!-- Section Container -->
        <div class="container">
            <!-- Section Block -->
            <div class="mx-auto mb-10 max-w-xl text-center text-[#000937] md:mb-[60px] lg:mb-20 lg:max-w-2xl xxl:max-w-4xl">
                <h2 class="jos font-outfit text-5xl font-medium leading-none lg:text-6xl lg:-tracking-[3px] xl:text-7xl xxl:text-[110px]">
                    Our process flows always smoothly
                </h2>
            </div>
            <!-- Section Block -->

            <!-- Process List -->
            <ul class="flex flex-col justify-between gap-y-10 divide-[#000937] text-[#000937] md:flex-row md:divide-x">
                <li class="jos flex flex-col justify-center gap-4 px-8 text-center first-of-type:pl-0 last-of-type:pr-0 md:gap-6 xl:px-[60px]">
                    <div class="mx-auto">
                        <img src="/assets/img/images/th-8/process-img-1.png" alt="process-img-1" width="191" height="191" class="max-w-28 lg:max-w-full" />
                    </div>
                    <div class="font-outfit text-2xl font-medium">
                        Planning and Strategy
                    </div>
                    <p class="para-lg">
                        In this step we understand the client's needs, goals &
                        challenges. Identify project pain points.
                    </p>
                </li>
                <li class="jos flex flex-col justify-center gap-4 px-8 text-center first-of-type:pl-0 last-of-type:pr-0 md:gap-6 xl:px-[60px]">
                    <div class="mx-auto">
                        <img src="/assets/img/images/th-8/process-img-2.png" alt="process-img-2" width="191" height="191" class="max-w-28 lg:max-w-full" />
                    </div>
                    <div class="font-outfit text-2xl font-medium">
                        Discovery and Analysis
                    </div>
                    <p class="para-lg">
                        Defining the project milestones, and creating a timeline,
                        allocating resources and procedures.
                    </p>
                </li>
                <li class="jos flex flex-col justify-center gap-4 px-8 text-center first-of-type:pl-0 last-of-type:pr-0 md:gap-6 xl:px-[60px]">
                    <div class="mx-auto">
                        <img src="/assets/img/images/th-8/process-img-3.png" alt="process-img-3" width="191" height="191" class="max-w-28 lg:max-w-full" />
                    </div>
                    <div class="font-outfit text-2xl font-medium">
                        Execution and Delivery
                    </div>
                    <p class="para-lg">
                        Along with the planning, and we proceed to execute the
                        project as per the agreed strategy.
                    </p>
                </li>
            </ul>
            <!-- Process List -->
        </div>
        <!-- Section Container -->
    </div>
    <!-- Section Space -->
</section>
<!-- ...::: Working Process Section End :::... -->





<!-- ...::: FAQ Section Start :::... -->
<section class="section-faq">
    <!-- Section Space -->
    <div class="section-space-bottom">
        <!-- Section Container -->
        <div class="container">
            <!-- Section Block -->
            <div class="mx-auto mb-10 max-w-xl text-center text-[#000937] md:mb-[60px] lg:mb-20 lg:max-w-2xl xxl:max-w-4xl">
                <h2 class="jos font-outfit text-5xl font-medium leading-none lg:text-6xl lg:-tracking-[3px] xl:text-7xl xxl:text-[110px]">
                    Most frequently asked questions
                </h2>
            </div>
            <!-- Section Block -->

            <!-- Accordion List -->
            <ul class="jos flex flex-col divide-y divide-[#000937]">
                <!-- Accordion Item -->
                <li class="accordion-item-style-4 accordion-item active py-10 first-of-type:pt-0 last-of-type:pb-0">
                    <!-- Accordion Header -->
                    <div class="accordion-header flex items-center justify-between gap-6 text-4xl text-[#000937]">
                        <button class="flex-1 text-left font-outfit text-3xl font-medium leading-tight md:text-4xl lg:text-[50px]">
                            What's your design process like?
                        </button>
                        <div class="accordion-icon">
                            <img src="/assets/img/icons/icon-black-cheveron-down.svg" alt="icon-black-cheveron-down" />
                        </div>
                    </div>
                    <!-- Accordion Header -->
                    <!-- Accordion Body -->
                    <div class="accordion-body max-w-[1126px] opacity-80">
                        <p class="para-lg pt-5">
                            Our design process typically involves discovery, concept development, design, revisions based on feedback, and finalization.
                        </p>
                    </div>
                    <!-- Accordion Body -->
                </li>
                <!-- Accordion Item -->
                <!-- Accordion Item -->
                <li class="accordion-item-style-4 accordion-item py-10 first-of-type:pt-0 last-of-type:pb-0">
                    <!-- Accordion Header -->
                    <div class="accordion-header flex items-center justify-between gap-6 text-4xl text-[#000937]">
                        <button class="flex-1 text-left font-outfit text-3xl font-medium leading-tight md:text-4xl lg:text-[50px]">
                            How do you handle user feedback?
                        </button>
                        <div class="accordion-icon">
                            <img src="/assets/img/icons/icon-black-cheveron-down.svg" alt="icon-black-cheveron-down" />
                        </div>
                    </div>
                    <!-- Accordion Header -->
                    <!-- Accordion Body -->
                    <div class="accordion-body max-w-[1126px] opacity-80">
                        <p class="para-lg pt-5">
                            We value client feedback and work closely with you to make sure user happy with the final design. We offer a specific number of revisions.
                        </p>
                    </div>
                    <!-- Accordion Body -->
                </li>
                <!-- Accordion Item -->
                <!-- Accordion Item -->
                <li class="accordion-item-style-4 accordion-item py-10 first-of-type:pt-0 last-of-type:pb-0">
                    <!-- Accordion Header -->
                    <div class="accordion-header flex items-center justify-between gap-6 text-4xl text-[#000937]">
                        <button class="flex-1 text-left font-outfit text-3xl font-medium leading-tight md:text-4xl lg:text-[50px]">
                            What services does agency offer?
                        </button>
                        <div class="accordion-icon">
                            <img src="/assets/img/icons/icon-black-cheveron-down.svg" alt="icon-black-cheveron-down" />
                        </div>
                    </div>
                    <!-- Accordion Header -->
                    <!-- Accordion Body -->
                    <div class="accordion-body max-w-[1126px] opacity-80">
                        <p class="para-lg pt-5">
                            Clients often seek to understand the range of design services an agency provides, such as graphic design, web design, branding.
                        </p>
                    </div>
                    <!-- Accordion Body -->
                </li>
                <!-- Accordion Item -->
                <!-- Accordion Item -->
                <li class="accordion-item-style-4 accordion-item py-10 first-of-type:pt-0 last-of-type:pb-0">
                    <!-- Accordion Header -->
                    <div class="accordion-header flex items-center justify-between gap-6 text-4xl text-[#000937]">
                        <button class="flex-1 text-left font-outfit text-3xl font-medium leading-tight md:text-4xl lg:text-[50px]">
                            How much does design work cost?
                        </button>
                        <div class="accordion-icon">
                            <img src="/assets/img/icons/icon-black-cheveron-down.svg" alt="icon-black-cheveron-down" />
                        </div>
                    </div>
                    <!-- Accordion Header -->
                    <!-- Accordion Body -->
                    <div class="accordion-body max-w-[1126px] opacity-80">
                        <p class="para-lg pt-5">
                            The cost of our design services varies depending on the scope of the project. We provide customized quotes after discussing requirements.
                        </p>
                    </div>
                    <!-- Accordion Body -->
                </li>
                <!-- Accordion Item -->
            </ul>
            <!-- Accordion List -->
        </div>
        <!-- Section Container -->
    </div>
    <!-- Section Space -->
</section>
<!-- ...::: FAQ Section End :::... -->
@endsection