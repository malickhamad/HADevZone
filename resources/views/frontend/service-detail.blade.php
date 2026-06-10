@extends('frontend.layouts.app')

@section('meta')
    <title>HADevZone - Websites, Dashboards & Business Web Solutions</title>

@endsection

@section('content')


        <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-4 text-white animated zoomIn" id="pageTitle">Service Details</h1>
                    <a href="{{ route('home')}}" class="h5 text-white">Home</a>
                    <i class="far fa-circle text-white px-2"></i>
                    <a href="{{ route('service')}}" class="h5 text-white">Services</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Full Screen Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px;">
                        <input type="text" class="form-control bg-transparent border-primary p-3" placeholder="Search website, dashboard, portal or CRM service">
                        <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Full Screen Search End -->


    <!-- Service Detail Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">

            <div class="row g-5 align-items-start">
                <div class="col-lg-8">

                    <div class="bg-primary rounded p-5 mb-5 shadow wow fadeInUp" data-wow-delay="0.1s">
                        <div class="row align-items-center">
                            <div class="col-lg-9">
                                <h5 class="text-white text-uppercase mb-3">HADevZone Service Detail</h5>
                                <h1 class="display-5 text-white mb-3" id="serviceTitle">Business Websites</h1>
                                <h4 class="text-white mb-4" id="serviceSubtitle">Professional website development for business growth</h4>
                                <p class="text-white mb-4" id="serviceDescription">
                                    Professional websites built to present your business clearly and help visitors contact you with confidence.
                                </p>
                                <a href="quote.html" class="btn btn-dark py-3 px-4 me-2">Request Quote</a>
                                <a href="https://wa.me/923114973366?text=Hi%20HADevZone%2C%20I%20want%20to%20discuss%20a%20service%20detail.%20Please%20guide%20me." class="btn btn-outline-light py-3 px-4">WhatsApp Us</a>
                            </div>
                            <div class="col-lg-3 text-center d-none d-lg-block">
                                <div class="bg-white rounded-circle d-flex align-items-center justify-content-center mx-auto" style="width: 130px; height: 130px;">
                                    <i class="fa fa-code text-primary" style="font-size: 55px;"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row g-4 mb-5">
                        <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="bg-light rounded p-4 h-100 text-center shadow-sm">
                                <div class="bg-primary rounded d-flex align-items-center justify-content-center mx-auto mb-3" style="width: 75px; height: 75px;">
                                    <i class="fa fa-lightbulb text-white" style="font-size: 30px;"></i>
                                </div>
                                <h5 class="mb-2">Smart Planning</h5>
                                <p class="mb-0">We understand your goals before deciding the layout, features, and workflow.</p>
                            </div>
                        </div>
                        <div class="col-md-4 wow fadeInUp" data-wow-delay="0.2s">
                            <div class="bg-light rounded p-4 h-100 text-center shadow-sm">
                                <div class="bg-primary rounded d-flex align-items-center justify-content-center mx-auto mb-3" style="width: 75px; height: 75px;">
                                    <i class="fa fa-desktop text-white" style="font-size: 30px;"></i>
                                </div>
                                <h5 class="mb-2">Clean Experience</h5>
                                <p class="mb-0">Pages and panels are arranged for smooth use on mobile and desktop.</p>
                            </div>
                        </div>
                        <div class="col-md-4 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="bg-light rounded p-4 h-100 text-center shadow-sm">
                                <div class="bg-primary rounded d-flex align-items-center justify-content-center mx-auto mb-3" style="width: 75px; height: 75px;">
                                    <i class="fa fa-chart-line text-white" style="font-size: 30px;"></i>
                                </div>
                                <h5 class="mb-2">Business Value</h5>
                                <p class="mb-0">Every section is focused on better presentation, control, and client response.</p>
                            </div>
                        </div>
                    </div>

                    <div class="section-title position-relative pb-3 mb-4 wow fadeInUp" data-wow-delay="0.1s">
                        <h5 class="fw-bold text-primary text-uppercase">Included Features</h5>
                        <h1 class="mb-0">What You Get With This Service</h1>
                    </div>
                    <div class="row g-4 mb-5" id="serviceFeatures"></div>

                    <div class="row g-4 mb-5">
                        <div class="col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="bg-light rounded p-4 h-100 shadow-sm">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="bg-primary rounded d-flex align-items-center justify-content-center me-3" style="width: 55px; height: 55px;">
                                        <i class="fa fa-users text-white"></i>
                                    </div>
                                    <h4 class="mb-0">Best For</h4>
                                </div>
                                <p class="mb-0" id="serviceBestFor"></p>
                            </div>
                        </div>
                        <div class="col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                            <div class="bg-light rounded p-4 h-100 shadow-sm">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="bg-primary rounded d-flex align-items-center justify-content-center me-3" style="width: 55px; height: 55px;">
                                        <i class="fa fa-bullseye text-white"></i>
                                    </div>
                                    <h4 class="mb-0">Business Impact</h4>
                                </div>
                                <p class="mb-0" id="serviceWhy"></p>
                            </div>
                        </div>
                    </div>

                    <div class="section-title position-relative pb-3 mb-4 wow fadeInUp" data-wow-delay="0.1s">
                        <h5 class="fw-bold text-primary text-uppercase">Development Flow</h5>
                        <h1 class="mb-0">How We Build Your Solution</h1>
                    </div>
                    <div class="row g-4 mb-5" id="serviceProcess"></div>

                    <div class="bg-dark rounded p-5 shadow wow fadeInUp" data-wow-delay="0.1s">
                        <div class="row align-items-center">
                            <div class="col-md-8">
                                <h3 class="text-white mb-3">Ready to build something professional?</h3>
                                <p class="text-white mb-md-0">Share your requirement with HADevZone and we will guide you with the right structure, features, and development direction.</p>
                            </div>
                            <div class="col-md-4 text-md-end mt-4 mt-md-0">
                                <a href="quote.html" class="btn btn-primary py-3 px-4 mb-2">Request Quote</a>
                                <a href="https://wa.me/923114973366?text=Hi%20HADevZone%2C%20I%20want%20to%20discuss%20a%20service%20detail.%20Please%20guide%20me." class="btn btn-outline-light py-3 px-4 mb-2">WhatsApp</a>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-lg-4">
                    <div class="bg-light rounded p-4 mb-4 shadow-sm wow fadeInRight" data-wow-delay="0.1s">
                        <h4 class="mb-4">Explore Services</h4>
                        <a class="d-flex align-items-center justify-content-between bg-white rounded p-3 mb-3 text-dark" href="service-detail.html?service=business-websites">
                            <span><i class="bi bi-arrow-right text-primary me-2"></i>Business Websites</span>
                        </a>
                        <a class="d-flex align-items-center justify-content-between bg-white rounded p-3 mb-3 text-dark" href="service-detail.html?service=admin-dashboards">
                            <span><i class="bi bi-arrow-right text-primary me-2"></i>Admin Dashboards</span>
                        </a>
                        <a class="d-flex align-items-center justify-content-between bg-white rounded p-3 mb-3 text-dark" href="service-detail.html?service=web-portals">
                            <span><i class="bi bi-arrow-right text-primary me-2"></i>Web Portals</span>
                        </a>
                        <a class="d-flex align-items-center justify-content-between bg-white rounded p-3 mb-3 text-dark" href="service-detail.html?service=crm-hrm-systems">
                            <span><i class="bi bi-arrow-right text-primary me-2"></i>CRM & HRM Systems</span>
                        </a>
                        <a class="d-flex align-items-center justify-content-between bg-white rounded p-3 mb-3 text-dark" href="service-detail.html?service=ecommerce-websites">
                            <span><i class="bi bi-arrow-right text-primary me-2"></i>eCommerce Websites</span>
                        </a>
                        <a class="d-flex align-items-center justify-content-between bg-white rounded p-3 text-dark" href="service-detail.html?service=custom-web-applications">
                            <span><i class="bi bi-arrow-right text-primary me-2"></i>Custom Web Applications</span>
                        </a>
                    </div>

                    <div class="bg-primary rounded p-4 mb-4 text-center shadow-sm wow fadeInRight" data-wow-delay="0.2s">
                        <i class="fa fa-phone-alt text-white mb-3" style="font-size: 42px;"></i>
                        <h4 class="text-white mb-3">Need Expert Guidance?</h4>
                        <p class="text-white mb-4">Send your idea and we will suggest the best service, structure, and development path.</p>
                        <h4 class="text-white mb-4">+92 311 4973366</h4>
                        <a href="https://wa.me/923114973366?text=Hi%20HADevZone%2C%20I%20need%20help%20choosing%20the%20right%20service.%20Please%20guide%20me." class="btn btn-dark py-2 px-4">Chat on WhatsApp</a>
                    </div>

                    <div class="bg-light rounded p-4 mb-4 shadow-sm">
                        <h4 class="mb-4">Project Types</h4>
                        <p class="mb-3"><i class="fa fa-check text-primary me-2"></i>Company websites</p>
                        <p class="mb-3"><i class="fa fa-check text-primary me-2"></i>Business dashboards</p>
                        <p class="mb-3"><i class="fa fa-check text-primary me-2"></i>CRM / HRM portals</p>
                        <p class="mb-3"><i class="fa fa-check text-primary me-2"></i>Online stores</p>
                        <p class="mb-0"><i class="fa fa-check text-primary me-2"></i>Custom platforms</p>
                    </div>

                    <div class="bg-dark rounded p-4 text-center shadow-sm">
                        <h4 class="text-white mb-3">Fast Project Discussion</h4>
                        <p class="text-white mb-4">Send your service type, goal, and required features. We will guide you clearly.</p>
                        <a href="contact.html" class="btn btn-primary py-2 px-4">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service Detail End -->




    <script>
        const services = {
            "business-websites": {
                title: "Business Websites",
                subtitle: "A professional website that makes your business look trusted online",
                description: "Your website should do more than show basic information. It should explain your services clearly, guide visitors toward action, and create a strong first impression. HADevZone builds business websites with clean structure, responsive layouts, service-focused sections, and inquiry-friendly pages that support your online growth.",
                bestFor: "Service providers, companies, agencies, institutes, clinics, consultants, local businesses, personal brands, repair services, and any business that needs a professional online identity.",
                why: "A strong website helps visitors understand your value before they call or message you. It builds trust, supports marketing, improves service presentation, and gives your business a reliable digital presence.",
                features: [
                    "Modern responsive layout",
                    "Home, about and service pages",
                    "Clear contact sections",
                    "WhatsApp and inquiry flow",
                    "SEO-friendly page structure",
                    "Professional content placement"
                ],
                process: [
                    "Understand business goals",
                    "Plan website sections",
                    "Prepare page layout",
                    "Add service content",
                    "Test mobile view",
                    "Launch final website"
                ]
            },
            "admin-dashboards": {
                title: "Admin Dashboards",
                subtitle: "A smart control panel to manage business data from one place",
                description: "An admin dashboard gives your business a central place to manage records, users, reports, orders, tasks, leads, staff activity, and operational data. HADevZone creates dashboards that are simple to use, structured for real workflow, and built to reduce manual work.",
                bestFor: "Businesses that need internal management panels, data records, staff tracking, order handling, sales summaries, lead follow-ups, application systems, or reporting screens.",
                why: "A dashboard saves time and improves control. Instead of scattered files and manual updates, your business gets one organized system for daily management and decision-making.",
                features: [
                    "Admin panel structure",
                    "User and role management",
                    "Records and status tracking",
                    "Search and filter options",
                    "Reports and summaries",
                    "Clean management screens"
                ],
                process: [
                    "Define required modules",
                    "Plan database structure",
                    "Create dashboard flow",
                    "Build admin screens",
                    "Add reports and filters",
                    "Test workflow accuracy"
                ]
            },
            "web-portals": {
                title: "Web Portals",
                subtitle: "Secure online access for clients, employees, students or members",
                description: "Web portals help different users access the right information through a private login system. HADevZone develops portals with organized dashboards, user roles, records, forms, requests, and admin controls so your business can manage communication and data more professionally.",
                bestFor: "Organizations, institutes, service companies, teams, client-based businesses, vendor systems, member platforms, employee portals, and student access systems.",
                why: "A portal improves communication, keeps records organized, and gives users controlled access without depending on repeated manual sharing or scattered messages.",
                features: [
                    "Secure login system",
                    "User roles and permissions",
                    "Private user dashboard",
                    "Forms and request sections",
                    "Admin approval options",
                    "Profile and record access"
                ],
                process: [
                    "Identify user types",
                    "Set access levels",
                    "Plan portal sections",
                    "Create user dashboard",
                    "Add admin controls",
                    "Test secure access"
                ]
            },
            "crm-hrm-systems": {
                title: "CRM & HRM Systems",
                subtitle: "Custom management systems for customers, staff and workflow",
                description: "CRM and HRM systems help your business manage people, follow-ups, departments, attendance, tasks, customer records, employee data, and reports. HADevZone builds systems according to your workflow so your team can work with better structure and fewer manual steps.",
                bestFor: "Companies that manage customers, leads, employees, departments, attendance, tasks, follow-ups, performance records, staff reports, or daily business activities.",
                why: "A custom CRM or HRM keeps important information organized and easy to track. It improves team coordination, reduces missed follow-ups, and supports better business management.",
                features: [
                    "Customer and lead records",
                    "Employee profile modules",
                    "Attendance or task tracking",
                    "Department management",
                    "Follow-up history",
                    "Reports and activity logs"
                ],
                process: [
                    "Study workflow",
                    "List required modules",
                    "Create record system",
                    "Add tracking tools",
                    "Build reports",
                    "Review daily usage"
                ]
            },
            "ecommerce-websites": {
                title: "eCommerce Websites",
                subtitle: "A complete online store for selling products professionally",
                description: "An eCommerce website helps you display products, manage categories, receive orders, guide customers through checkout, and control store activity from the backend. HADevZone creates online stores that are easy for customers to browse and simple for owners to manage.",
                bestFor: "Retail shops, product sellers, electronics stores, clothing brands, accessories businesses, online sellers, service sellers, and companies that want to receive orders online.",
                why: "A properly built online store improves product presentation, makes buying easier, and helps you manage products, orders, and customer activity in one place.",
                features: [
                    "Product listing pages",
                    "Category structure",
                    "Cart and checkout flow",
                    "Order management",
                    "Payment setup guidance",
                    "Admin product control"
                ],
                process: [
                    "Plan product categories",
                    "Design store pages",
                    "Build product flow",
                    "Setup cart and checkout",
                    "Add order controls",
                    "Test customer journey"
                ]
            },
            "custom-web-applications": {
                title: "Custom Web Applications",
                subtitle: "A tailored web platform built around your exact business idea",
                description: "Some businesses need a system that is more specific than a normal website. HADevZone can build custom web applications such as booking systems, quotation platforms, reporting tools, service portals, management systems, and database-driven platforms based on your workflow.",
                bestFor: "Businesses with special processes, unique ideas, manual workflows, custom forms, reporting needs, booking requirements, internal systems, or web-based tools.",
                why: "A custom web application gives your business the exact features it needs. It can reduce manual effort, improve speed, organize data, and create a better experience for staff, clients, or customers.",
                features: [
                    "Custom feature planning",
                    "Database-driven modules",
                    "Admin and user panels",
                    "Forms and request systems",
                    "Reports and tracking",
                    "Scalable development structure"
                ],
                process: [
                    "Understand the idea",
                    "Create feature scope",
                    "Design user journey",
                    "Develop core modules",
                    "Test business logic",
                    "Prepare improvements"
                ]
            }
        };

        const params = new URLSearchParams(window.location.search);
        const selectedService = params.get("service") || "business-websites";
        const service = services[selectedService] || services["business-websites"];

        document.title = service.title + " - HADevZone Service Details";
        document.getElementById("pageTitle").innerText = service.title;
        document.getElementById("serviceTitle").innerText = service.title;
        document.getElementById("serviceSubtitle").innerText = service.subtitle;
        document.getElementById("serviceDescription").innerText = service.description;
        document.getElementById("serviceBestFor").innerText = service.bestFor;
        document.getElementById("serviceWhy").innerText = service.why;

        const featureContainer = document.getElementById("serviceFeatures");
        featureContainer.innerHTML = "";

        service.features.forEach(function(feature) {
            featureContainer.innerHTML += `
                <div class="col-md-6">
                    <div class="bg-light rounded p-4 h-100 shadow-sm">
                        <h6 class="mb-0"><i class="fa fa-check text-primary me-3"></i>${feature}</h6>
                    </div>
                </div>
            `;
        });

        const processContainer = document.getElementById("serviceProcess");
        processContainer.innerHTML = "";

        service.process.forEach(function(step, index) {
            processContainer.innerHTML += `
                <div class="col-md-4">
                    <div class="bg-light rounded p-4 h-100 text-center shadow-sm">
                        <div class="bg-primary d-flex align-items-center justify-content-center mx-auto mb-3" style="width: 58px; height: 58px; border-radius: 50%;">
                            <h5 class="text-white mb-0">${index + 1}</h5>
                        </div>
                        <h6 class="mb-0">${step}</h6>
                    </div>
                </div>
            `;
        });
    </script>


@endsection
