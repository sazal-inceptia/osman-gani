@extends('layouts.app')

@section('title', 'Contact Us | Osman Gani Official Mission & Office')
@section('meta_description', 'Contact Osman Gani’s executive office for keynote booking, masterclass support, bulk book orders, or media inquiries.')

@section('content')
    <section class="relative bg-gradient-to-b from-[#090b10] via-[#121622] to-[#050608] text-white py-20 sm:py-28 border-b border-gray-800 overflow-hidden text-center">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 space-y-6">
            <div class="flex items-center justify-center gap-2 text-xs font-montserrat tracking-widest uppercase text-gray-400 mb-6">
                <a href="{{ route('home') }}" class="hover:text-white transition">Home</a>
                <span class="text-[#df3243]">•</span>
                <span class="text-[#df3243] font-bold">Contact Office</span>
            </div>

            <h1 class="font-oswald text-3xl sm:text-5xl lg:text-6xl font-bold uppercase tracking-wide leading-tight text-white max-w-5xl mx-auto">
                Get In Touch With <br class="hidden sm:inline">
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#df3243] via-[#ff6b6b] to-[#ff8421]">
                    Osman Gani &amp; His Team
                </span>
            </h1>

            <p class="font-ubuntu text-base sm:text-xl text-gray-300 max-w-3xl mx-auto leading-relaxed">
                We are dedicated to supporting your growth. Reach out for speaking engagements, training partnerships, student support, or media requests.
            </p>
        </div>
    </section>

    <section class="py-20 bg-[#050608] border-b border-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">
                
                <!-- Left: Contact Information Cards -->
                <div class="lg:col-span-5 space-y-6">
                    
                    <!-- Address Card -->
                    <div class="glass-card rounded-3xl p-8 border-l-4 border-[#df3243] space-y-3">
                        <div class="w-12 h-12 rounded-xl bg-red-950/60 text-[#df3243] flex items-center justify-center text-xl">
                            <i class="fa-solid fa-location-dot"></i>
                        </div>
                        <h3 class="font-oswald text-2xl font-bold text-white uppercase">Corporate Office</h3>
                        <p class="text-gray-300 font-ubuntu text-sm leading-relaxed">
                            <strong>Osman Gani Leadership &amp; Training Academy</strong><br>
                            Level 8, Concord Tower, Gulshan-2 Avenue,<br>
                            Dhaka - 1212, Bangladesh.
                        </p>
                    </div>

                    <!-- Email Card -->
                    <div class="glass-card rounded-3xl p-8 border-l-4 border-[#ff8421] space-y-3">
                        <div class="w-12 h-12 rounded-xl bg-orange-950/60 text-[#ff8421] flex items-center justify-center text-xl">
                            <i class="fa-solid fa-envelope"></i>
                        </div>
                        <h3 class="font-oswald text-2xl font-bold text-white uppercase">Official Email</h3>
                        <p class="text-gray-300 font-ubuntu text-sm leading-relaxed">
                            General &amp; Student Inquiries:<br>
                            <a href="mailto:support@osmangani.com" class="text-white hover:text-[#df3243] font-semibold transition">support@osmangani.com</a>
                        </p>
                    </div>

                    <!-- Phone Card -->
                    <div class="glass-card rounded-3xl p-8 border-l-4 border-[#4cadad] space-y-3">
                        <div class="w-12 h-12 rounded-xl bg-teal-950/60 text-[#4cadad] flex items-center justify-center text-xl">
                            <i class="fa-solid fa-phone"></i>
                        </div>
                        <h3 class="font-oswald text-2xl font-bold text-white uppercase">Phone &amp; WhatsApp</h3>
                        <p class="text-gray-300 font-ubuntu text-sm leading-relaxed">
                            Executive Desk: <a href="tel:+8801700000000" class="text-white hover:text-[#df3243] font-semibold transition">+880 1700-000000</a><br>
                            WhatsApp Direct: <a href="https://whatsapp.com" target="_blank" class="text-white hover:text-[#df3243] font-semibold transition">+880 1800-000000</a>
                        </p>
                    </div>

                </div>

                <!-- Right: Direct Message Form -->
                <div class="lg:col-span-7">
                    <form action="#" method="POST" class="glass-card p-8 sm:p-12 rounded-3xl space-y-6 border-2 border-red-900/40" onsubmit="event.preventDefault(); alert('Thank you! Your message has been sent successfully. Our team will contact you within 24 hours.');">
                        <h3 class="font-oswald text-3xl font-bold text-white uppercase tracking-wide">
                            Send Us A Direct Message
                        </h3>
                        <p class="text-gray-400 font-ubuntu text-xs">Fill out the form below and we will get back to you promptly.</p>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-xs font-montserrat uppercase tracking-wider text-gray-300 mb-2">Your Full Name *</label>
                                <input type="text" required placeholder="e.g. Shakib Al Hasan" class="w-full bg-[#11141d] border border-gray-700 rounded-xl px-4 py-3 text-sm text-white focus:outline-none focus:border-[#df3243]">
                            </div>
                            <div>
                                <label class="block text-xs font-montserrat uppercase tracking-wider text-gray-300 mb-2">Email Address *</label>
                                <input type="email" required placeholder="name@example.com" class="w-full bg-[#11141d] border border-gray-700 rounded-xl px-4 py-3 text-sm text-white focus:outline-none focus:border-[#df3243]">
                            </div>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-xs font-montserrat uppercase tracking-wider text-gray-300 mb-2">Phone / WhatsApp Number</label>
                                <input type="tel" placeholder="+880 1700-000000" class="w-full bg-[#11141d] border border-gray-700 rounded-xl px-4 py-3 text-sm text-white focus:outline-none focus:border-[#df3243]">
                            </div>
                            <div>
                                <label class="block text-xs font-montserrat uppercase tracking-wider text-gray-300 mb-2">Inquiry Topic</label>
                                <select class="w-full bg-[#11141d] border border-gray-700 rounded-xl px-4 py-3 text-sm text-white focus:outline-none focus:border-[#df3243]">
                                    <option>Keynote Speaking / Corporate Event</option>
                                    <option>Online Course / Academy Support</option>
                                    <option>Bulk Book Orders</option>
                                    <option>Media &amp; Press Interview</option>
                                    <option>Other Collaboration</option>
                                </select>
                            </div>
                        </div>

                        <div>
                            <label class="block text-xs font-montserrat uppercase tracking-wider text-gray-300 mb-2">Your Message *</label>
                            <textarea rows="4" required placeholder="Write your message or inquiry here..." class="w-full bg-[#11141d] border border-gray-700 rounded-xl px-4 py-3 text-sm text-white focus:outline-none focus:border-[#df3243]"></textarea>
                        </div>

                        <div class="pt-2">
                            <button type="submit" class="btn-pill-filled-red text-base px-10 py-3.5 w-full sm:w-auto">
                                <i class="fa-solid fa-paper-plane"></i>
                                <span>Send Message Now</span>
                            </button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </section>
@endsection
