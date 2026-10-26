@extends('layouts.app')

@section('title', 'Contact Us | Osman Gani Official Mission & Office')
@section('meta_description', 'Contact Osman Gani’s executive office for keynote booking, masterclass support, bulk book orders, or media inquiries.')

@section('content')
    <section class="relative bg-[#0c0d12] text-white py-20 sm:py-24 border-b border-gray-800 text-center">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 space-y-6">
            <div class="flex items-center justify-center gap-2 text-xs font-montserrat tracking-widest uppercase text-gray-400 mb-6">
                <a href="{{ route('home') }}" class="hover:text-white transition">Home</a>
                <span class="text-[#c92a2a]">•</span>
                <span class="text-[#c92a2a] font-bold">Contact Office</span>
            </div>

            <h1 class="font-oswald text-3xl sm:text-5xl lg:text-6xl font-bold uppercase tracking-wide leading-tight text-white max-w-4xl mx-auto">
                Get In Touch With <br class="hidden sm:inline">
                <span class="text-[#c92a2a]">Osman Gani &amp; His Team</span>
            </h1>

            <p class="font-ubuntu text-base sm:text-lg text-gray-300 max-w-2xl mx-auto leading-relaxed">
                We are dedicated to supporting your growth. Reach out for speaking engagements, training partnerships, student support, or media requests.
            </p>
        </div>
    </section>

    <section class="py-20 bg-[#fbfaf8] border-b border-gray-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">
                
                <!-- Left: Contact Information Cards -->
                <div class="lg:col-span-5 space-y-6">
                    
                    <!-- Address Card -->
                    <div class="bg-white rounded-2xl p-8 border-l-4 border-[#c92a2a] border-t border-r border-b border-gray-200 shadow-sm space-y-3">
                        <div class="w-12 h-12 rounded-xl bg-red-50 text-[#c92a2a] flex items-center justify-center text-xl">
                            <i class="fa-solid fa-location-dot"></i>
                        </div>
                        <h3 class="font-oswald text-2xl font-bold text-gray-900 uppercase">Corporate Office</h3>
                        <p class="text-gray-600 font-ubuntu text-sm leading-relaxed">
                            <strong>Osman Gani Leadership &amp; Training Academy</strong><br>
                            Level 8, Concord Tower, Gulshan-2 Avenue,<br>
                            Dhaka - 1212, Bangladesh.
                        </p>
                    </div>

                    <!-- Email Card -->
                    <div class="bg-white rounded-2xl p-8 border-l-4 border-slate-700 border-t border-r border-b border-gray-200 shadow-sm space-y-3">
                        <div class="w-12 h-12 rounded-xl bg-slate-100 text-slate-800 flex items-center justify-center text-xl">
                            <i class="fa-solid fa-envelope"></i>
                        </div>
                        <h3 class="font-oswald text-2xl font-bold text-gray-900 uppercase">Official Email</h3>
                        <p class="text-gray-600 font-ubuntu text-sm leading-relaxed">
                            General &amp; Student Inquiries:<br>
                            <a href="mailto:support@osmangani.com" class="text-gray-900 hover:text-[#c92a2a] font-semibold transition">support@osmangani.com</a>
                        </p>
                    </div>

                    <!-- Phone Card -->
                    <div class="bg-white rounded-2xl p-8 border-l-4 border-emerald-700 border-t border-r border-b border-gray-200 shadow-sm space-y-3">
                        <div class="w-12 h-12 rounded-xl bg-emerald-50 text-emerald-700 flex items-center justify-center text-xl">
                            <i class="fa-solid fa-phone"></i>
                        </div>
                        <h3 class="font-oswald text-2xl font-bold text-gray-900 uppercase">Phone &amp; WhatsApp</h3>
                        <p class="text-gray-600 font-ubuntu text-sm leading-relaxed">
                            Executive Desk: <a href="tel:+8801700000000" class="text-gray-900 hover:text-[#c92a2a] font-semibold transition">+880 1700-000000</a><br>
                            WhatsApp Direct: <a href="https://whatsapp.com" target="_blank" class="text-gray-900 hover:text-[#c92a2a] font-semibold transition">+880 1800-000000</a>
                        </p>
                    </div>

                </div>

                <!-- Right: Direct Message Form -->
                <div class="lg:col-span-7">
                    @if (session('success'))
                        <div class="mb-6 bg-emerald-50 border border-emerald-200 text-emerald-800 px-6 py-4 rounded-xl text-sm flex items-center gap-3">
                            <i class="fa-solid fa-circle-check text-xl text-emerald-600"></i>
                            <div>
                                <h4 class="font-bold">Message Sent Successfully!</h4>
                                <p class="text-xs text-emerald-700 mt-0.5">{{ session('success') }}</p>
                            </div>
                        </div>
                    @endif

                    @if ($errors->any())
                        <div class="mb-6 bg-red-50 border border-red-200 text-red-800 p-4 rounded-xl text-xs space-y-1">
                            @foreach ($errors->all() as $error)
                                <div class="flex items-center gap-2">
                                    <i class="fa-solid fa-circle-xmark text-red-600"></i>
                                    <span>{{ $error }}</span>
                                </div>
                            @endforeach
                        </div>
                    @endif

                    <form action="{{ route('contact.store') }}" method="POST" class="bg-white p-8 sm:p-12 rounded-2xl space-y-6 border border-gray-200 shadow-sm">
                        @csrf
                        <h3 class="font-oswald text-2xl sm:text-3xl font-bold text-gray-900 uppercase tracking-wide">
                            Send Us A Direct Message
                        </h3>
                        <p class="text-gray-500 font-ubuntu text-xs">Fill out the form below and our team will get back to you promptly.</p>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-xs font-montserrat uppercase tracking-wider text-gray-700 font-semibold mb-2">Your Full Name *</label>
                                <input type="text" name="name" value="{{ old('name') }}" required placeholder="e.g. Shakib Al Hasan" class="w-full bg-gray-50 border border-gray-200 rounded-xl px-4 py-3 text-sm text-gray-900 focus:outline-none focus:border-[#c92a2a] focus:bg-white">
                            </div>
                            <div>
                                <label class="block text-xs font-montserrat uppercase tracking-wider text-gray-700 font-semibold mb-2">Email Address *</label>
                                <input type="email" name="email" value="{{ old('email') }}" required placeholder="name@example.com" class="w-full bg-gray-50 border border-gray-200 rounded-xl px-4 py-3 text-sm text-gray-900 focus:outline-none focus:border-[#c92a2a] focus:bg-white">
                            </div>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-xs font-montserrat uppercase tracking-wider text-gray-700 font-semibold mb-2">Phone / WhatsApp Number</label>
                                <input type="tel" name="phone" value="{{ old('phone') }}" placeholder="+880 1700-000000" class="w-full bg-gray-50 border border-gray-200 rounded-xl px-4 py-3 text-sm text-gray-900 focus:outline-none focus:border-[#c92a2a] focus:bg-white">
                            </div>
                            <div>
                                <label class="block text-xs font-montserrat uppercase tracking-wider text-gray-700 font-semibold mb-2">Inquiry Topic</label>
                                <select name="inquiry_type" class="w-full bg-gray-50 border border-gray-200 rounded-xl px-4 py-3 text-sm text-gray-900 focus:outline-none focus:border-[#c92a2a] focus:bg-white">
                                    <option value="Keynote Speaking / Corporate Event" {{ old('inquiry_type') == 'Keynote Speaking / Corporate Event' ? 'selected' : '' }}>Keynote Speaking / Corporate Event</option>
                                    <option value="Online Course / Academy Support" {{ old('inquiry_type') == 'Online Course / Academy Support' ? 'selected' : '' }}>Online Course / Academy Support</option>
                                    <option value="Bulk Book Orders" {{ old('inquiry_type') == 'Bulk Book Orders' ? 'selected' : '' }}>Bulk Book Orders</option>
                                    <option value="Media & Press Interview" {{ old('inquiry_type') == 'Media & Press Interview' ? 'selected' : '' }}>Media &amp; Press Interview</option>
                                    <option value="Other Collaboration" {{ old('inquiry_type') == 'Other Collaboration' ? 'selected' : '' }}>Other Collaboration</option>
                                </select>
                            </div>
                        </div>

                        <div>
                            <label class="block text-xs font-montserrat uppercase tracking-wider text-gray-700 font-semibold mb-2">Organization / Company Name</label>
                            <input type="text" name="organization" value="{{ old('organization') }}" placeholder="e.g. TechCorp Asia" class="w-full bg-gray-50 border border-gray-200 rounded-xl px-4 py-3 text-sm text-gray-900 focus:outline-none focus:border-[#c92a2a] focus:bg-white">
                        </div>

                        <div>
                            <label class="block text-xs font-montserrat uppercase tracking-wider text-gray-700 font-semibold mb-2">Your Message *</label>
                            <textarea name="message" rows="4" required placeholder="Write your message or inquiry here..." class="w-full bg-gray-50 border border-gray-200 rounded-xl px-4 py-3 text-sm text-gray-900 focus:outline-none focus:border-[#c92a2a] focus:bg-white">{{ old('message') }}</textarea>
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
