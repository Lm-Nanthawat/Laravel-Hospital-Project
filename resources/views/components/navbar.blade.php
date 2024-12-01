<div class="bg-[] w-[100%] h-[12vh] space-y-8 shadow-md shadow-[#e3eef9] Navbar-main">

    {{-- Topbar --}}
    <div class="w-[84%] m-auto topbar-box">
        <div class="topbar">
            <ul class="space-x-4 text-[13px] font-[460] flex">
                <li>bchcustomerconnect@bdms.co.th </li>
                <li>039319888</li>
                <li>25/14 Thaluang Watmai Muang Chanthaburi</li>
            </ul>
        </div>
    </div>
    
    {{-- Navbar --}}
    <div class="w-[82%] m-auto navbar-box">
        <div class="flex justify-between items-center navbar">
            <ul class="space-x-12 text-[#223851] text-base font-[530] flex items-center">
                {{-- Home Menu --}}
                <li class="hover:text-[#1760c0] decoration-[transparent] hover:underline decoration-2 underline-offset-[16px] hover:decoration-[#1760c0] transition cursor-pointer"><a class="underline-[red]" href="{{ route('home.page') }}">Home</a></li>
                
                {{-- About Us menu --}}
                <li class="relative group">
                    <p class="hover:text-[#1760c0] decoration-[transparent] hover:underline decoration-2 underline-offset-[16px] hover:decoration-[#1760c0] transition cursor-context-menu">About Us</p>
                    <!-- Dropdown Menu -->
                    <div class="absolute left-0 bg-white shadow-lg rounded mt-0 w-[200px] opacity-0 visibility-hidden group-hover:opacity-100 group-hover:visibility-visible transition-opacity duration-500 delay-200 pointer-events-none group-hover:pointer-events-auto">
                        <ul class="flex flex-col pl-2 py-4 gap-y-2">
                            <li class="hover:text-[#1760c0] transition p-2 cursor-pointer">
                                <a href="#">Hospital history</a>
                            </li>
                            <li class="hover:text-[#1760c0] transition p-2 cursor-pointer">
                                <a href="#">Vision and Mission</a>
                            </li>
                            <li class="hover:text-[#1760c0] transition p-2 cursor-pointer">
                                <a href="#">Executive Chart</a>
                            </li>
                            <li class="hover:text-[#1760c0] transition p-2 cursor-pointer">
                                <a href="#">Facilities</a>
                            </li>
                            <li class="hover:text-[#1760c0] transition p-2 cursor-pointer">
                                <a href="#">PDPA</a>
                            </li>
                        </ul>
                    </div>
                </li>
                
                

                {{-- Customer Services --}}
                <li class="relative group">
                    <p class="hover:text-[#1760c0] decoration-[transparent] hover:underline decoration-2 underline-offset-[16px] hover:decoration-[#1760c0] transition cursor-context-menu">Customer Service</p>

                    <div class="absolute left-0 bg-white shadow-lg rounded mt-0 w-[240px] opacity-0 visibility-hidden group-hover:opacity-100 group-hover:visibility-visible transition-opacity duration-500 delay-200 pointer-events-none group-hover:pointer-events-auto">
                        <ul class="flex flex-col pl-2 py-4 gap-y-2">
                            <li class="hover:text-[#1760c0] transition p-2 cursor-pointer">
                                <a href="#">News articles</a>
                            </li>
                            <li class="hover:text-[#1760c0] transition p-2 cursor-pointer">
                                <a href="">Medical services</a>
                            </li>
                            <li class="hover:text-[#1760c0] transition p-2 cursor-pointer">
                                <a href="">Doctor's appointment</a>
                            </li>
                            <li class="hover:text-[#1760c0] transition p-2 cursor-pointer">
                                <a href="#">Insurance Agent Services</a>
                            </li>
                            <li class="hover:text-[#1760c0] transition p-2 cursor-pointer">
                                <a href="">Online document services</a>
                            </li>
                            <li class="hover:text-[#1760c0] transition p-2 cursor-pointer">
                                <a href="">Inpatient dormitory</a>
                            </li>
                            <li class="hover:text-[#1760c0] transition p-2 cursor-pointer">
                                <a href="#">Bio-Vitality Card</a>
                            </li>
                            <li class="hover:text-[#1760c0] transition p-2 cursor-pointer">
                                <a href="">Health Risk Assessment</a>
                            </li>
                            <li class="hover:text-[#1760c0] transition p-2 cursor-pointer">
                                <a href="">Civil servant privileges</a>
                            </li>
                        </ul>
                    </div>
                </li>
                


                {{-- Health Insurance Menu --}}
                <li class="relative group">
                    <p class="hover:text-[#1760c0] decoration-[transparent] hover:underline decoration-2 underline-offset-[16px] hover:decoration-[#1760c0] transition cursor-context-menu">Health Insurance</p>

                    <div class="absolute left-0 bg-white shadow-lg rounded mt-0 w-[220px] opacity-0 visibility-hidden group-hover:opacity-100 group-hover:visibility-visible transition-opacity duration-500 delay-200 pointer-events-none group-hover:pointer-events-auto">
                        <ul class="flex flex-col pl-2 py-4 gap-y-2">
                            <li class="hover:text-[#1760c0] transition p-2 cursor-pointer">
                                <a href="#">For insurance agents</a>
                            </li>
                            <li class="hover:text-[#1760c0] transition p-2 cursor-pointer">
                                <a href="">For health insurance customers</a>
                            </li>
                            <li class="hover:text-[#1760c0] transition p-2 cursor-pointer">
                                <a href="">Co-Promotions</a>
                            </li>
                            
                        </ul>
                    </div>
                </li>
                

                {{-- Package and Promotions Menu --}}
                <li class="relative group">
                    <p class="font-bold hover:text-[#1760c0] decoration-[transparent] hover:underline decoration-2 underline-offset-[16px] hover:decoration-[#1760c0] transition cursor-context-menu">Package and Promotions</p>

                    <div class="absolute left-0 bg-white shadow-lg rounded mt-0 w-[220px] opacity-0 visibility-hidden group-hover:opacity-100 group-hover:visibility-visible transition-opacity duration-500 delay-200 pointer-events-none group-hover:pointer-events-auto">
                        <ul class="flex flex-col pl-2 py-4 gap-y-2">
                            <li class="hover:text-[#1760c0] transition p-2 cursor-pointer">
                                <a href="#">Package details</a>
                            </li>
                            <li class="hover:text-[#1760c0] transition p-2 cursor-pointer">
                                <a href="">Buy packages and promotions</a>
                            </li>
                            
                        </ul>
                    </div>
                </li>
                

                {{-- Contact Menu --}}
                <li class="relative group">
                    <p class="hover:text-[#1760c0] decoration-[transparent] hover:underline decoration-2 underline-offset-[16px] hover:decoration-[#1760c0] transition cursor-context-menu">Contact</p>

                    <div class="absolute left-0 bg-white shadow-lg rounded mt-0 w-[220px] opacity-0 visibility-hidden group-hover:opacity-100 group-hover:visibility-visible transition-opacity duration-500 delay-200 pointer-events-none group-hover:pointer-events-auto">
                        <ul class="flex flex-col pl-2 py-4 gap-y-2">
                            <li class="hover:text-[#1760c0] transition p-2 cursor-pointer">
                                <a href="#">Maps and directions</a>
                            </li>
                            <li class="hover:text-[#1760c0] transition p-2 cursor-pointer">
                                <a href="">Apply for a job with us</a>
                            </li>
                            
                        </ul>
                    </div>
                </li>
                

                {{-- Member Menu --}}
                <li class="relative group">
                    <p class="hover:text-[#1760c0] decoration-[transparent] hover:underline decoration-2 underline-offset-[16px] hover:decoration-[#1760c0] transition cursor-context-menu">Member</p>

                       <div class="absolute left-0 bg-white shadow-lg rounded mt-0 w-[160px] opacity-0 visibility-hidden group-hover:opacity-100 group-hover:visibility-visible transition-opacity duration-500 delay-200 pointer-events-none group-hover:pointer-events-auto">
                        <ul class="flex flex-col pl-2 py-4 gap-y-2">
                            <li class="hover:text-[#1760c0] transition p-2 cursor-pointer">
                                <a href="#">Login</a>
                            </li>
                            <li class="hover:text-[#1760c0] transition p-2 cursor-pointer">
                                <a href="{{ route('register.page') }}">Register</a>
                            </li>
                            
                        </ul>
                    </div>
                </li>
            </ul>

            {{-- Appointment and Languege --}}
            <ul class="space-x-2 flex">
                <li class="bg-[#031e61] text-[white] font-[530] p-2 px-6 rounded cursor-pointer"><a href="">Appointment</a></li>
                <li class="bg-[#031e61] text-[white] font-[530] p-2 px-6 rounded cursor-pointer">EN</li>
            </ul>
        </div>
    </div>
    
</div>