<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register | Bangkok Hospital</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <header>
        @include('components.navbar')
    </header>
    {{-- Main Content --}}
    <main class="w-[82%] m-auto flex main-container">
        
        {{-- Image Show Section --}}
        <section class="w-[50%] flex items-center left-container">
            <div class="w-[80%] ">
                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp" alt="">
            </div>
            

        </section>

        {{-- Register Section --}}
        <section class="w-[50%] right-container">
            <div class="mb-[4rem] spacing"></div> <!-- Spacing by margin-bottom-4rem -->

            <h1 class="text-4xl font-[530] pb-2">Register</h1>
            <p class="font-[500]">If you are already a member</p>

            <div class="mb-[1.5rem] spacing"></div>

            <form action="">

                {{-- Select member type --}}
                <div class="block member-type"> 
                    <label for="" class="block">You want to become a member <span class="text-[red]">*</span></label>
                    <select name="preference" id="preference" class="mt-1 bg-[white] h-[2.8rem] w-full outline outline-1 outline-[#d6dbe0] rounded-md appearance-none pl-4 font-semibold focus:outline-[6px] 
               focus:outline-[#c3d4fe] transition-all duration-500 ease-out" required>
                        <option value="" disabled selected>Please select</option>
                        <option value="Personal" selected>Personal</option>
                        <option value="Insurance">Insurance agent</option>
                    </select>
                </div>

                <div class="mb-[3rem] spacing"></div>

                {{-- --------------------------------------------------------------------------------------------------------------------------------------------------------------- --}}

                {{-- Prefix Name and Lastname form --}}
                <div class="grid grid-cols-3 gap-x-4 name-form">

                    {{-- Prefix box --}}
                    <div class="block Prefix-box">
                        <label for="" class="block">Prefix <span class="text-[red]">*</span></label>
                        <select name="" id="" required class="mt-1 bg-[white] h-[2.8rem] w-full outline outline-1 outline-[#d6dbe0] rounded-md appearance-none pl-4 font-semibold focus:outline-[6px] 
               focus:outline-[#c3d4fe] transition-all duration-500 ease-out">
                            <option value="" disabled selected>Please select</option>
                            <option value="Mr." >นาย / Mr.</option>
                            <option value="Mrs." >นาง / Mrs.</option>
                            <option value="Ms." >นางสาว / Ms.</option>
                            <option value="Boy." >เด็กชาย / Boy.</option>
                            <option value="Girl." >เด็กหญิง / Girl.</option>
                        </select>
                    </div>

                    {{-- Name box --}}
                    <div class="block Name-box">
                        <label for="" class="block">Name <span class="text-[red]">*</span></label>
                        <input type="text" placeholder="Enter your real name" class="placeholder-[black] mt-1 bg-[white] h-[2.8rem] w-full outline outline-1 outline-[#d6dbe0] rounded-md appearance-none pl-4 font-semibold focus:outline-[6px] 
               focus:outline-[#c3d4fe] transition-all duration-500 ease-out">
                    </div>

                    {{-- Lastname box --}}
                    <div class="block Lastname-box">
                        <label for="" class="block">Lastname <span class="text-[red]">*</span></label>
                        <input type="text" placeholder="Enter your Lastname" class="placeholder-[black] mt-1 bg-[white] h-[2.8rem] w-full outline outline-1 outline-[#d6dbe0] rounded-md appearance-none pl-4 font-semibold focus:outline-[6px] 
                        focus:outline-[#c3d4fe] transition-all duration-500 ease-out">
                    </div>
                </div>

                {{-- Spacing and Horizontial line --}}
                <div class="mb-[1.5rem] spacing"></div>
                <hr style="height:10px; width:100%;text-align:left;margin-left:0">
                <div class="mb-[1rem] spacing"></div>

                {{-- --------------------------------------------------------------------------------------------------------------------------------------------------------------- --}}
               
                {{-- Birthday Box --}}
                <div class="grid grid-cols-3 gap-x-4 birthday-form">

                    {{-- Day box --}}
                    <div class="block Day-box">
                        <label for="" class="block">Day <span class="text-[red]">*</span></label>
                        <select name="" id="" required class="mt-1 bg-[white] h-[2.8rem] w-full outline outline-1 outline-[#d6dbe0] rounded-md appearance-none pl-4 font-semibold focus:outline-[6px] 
               focus:outline-[#c3d4fe] transition-all duration-500 ease-out">
                            <option value="" disabled selected>Please select</option>
                            <option value="Mr." >นาย / Mr.</option>
                            <option value="Mrs." >นาง / Mrs.</option>
                            <option value="Ms." >นางสาว / Ms.</option>
                            <option value="Boy." >เด็กชาย / Boy.</option>
                            <option value="Girl." >เด็กหญิง / Girl.</option>
                        </select>
                    </div>

                    {{-- Month box --}}
                    <div class="block Month-box">
                        <label for="" class="block">Month <span class="text-[red]">*</span></label>
                        <input type="text" placeholder="Enter your real name" class="placeholder-[black] mt-1 bg-[white] h-[2.8rem] w-full outline outline-1 outline-[#d6dbe0] rounded-md appearance-none pl-4 font-semibold focus:outline-[6px] 
               focus:outline-[#c3d4fe] transition-all duration-500 ease-out">
                    </div>

                    {{-- Years box --}}
                    <div class="block Years-box">
                        <label for="" class="block">Years <span class="text-[red]">*</span></label>
                        <input type="text" placeholder="Enter your Lastname" class="placeholder-[black] mt-1 bg-[white] h-[2.8rem] w-full outline outline-1 outline-[#d6dbe0] rounded-md appearance-none pl-4 font-semibold focus:outline-[6px] 
                        focus:outline-[#c3d4fe] transition-all duration-500 ease-out">
                    </div>
                </div>

        
                {{-- Spacing and Horizontial line --}}
                <div class="mb-[1.5rem] spacing"></div>
                <hr style="height:10px; width:100%;text-align:left;margin-left:0">
                <div class="mb-[1rem] spacing"></div>


                {{-- --------------------------------------------------------------------------------------------------------------------------------------------------------------- --}}

                {{-- Address Box --}}
                <div class="grid grid-cols-3 gap-x-4 birthday-form">

                    {{-- Province box --}}
                    <div class="block Province-box">
                        <label for="" class="block">Province <span class="text-[red]">*</span></label>
                        <select name="" id="" required class="mt-1 bg-[white] h-[2.8rem] w-full outline outline-1 outline-[#d6dbe0] rounded-md appearance-none pl-4 font-semibold focus:outline-[6px] 
               focus:outline-[#c3d4fe] transition-all duration-500 ease-out">
                            <option value="" disabled selected>Please select</option>
                            <option value="Mr." >นาย / Mr.</option>
                            <option value="Mrs." >นาง / Mrs.</option>
                            <option value="Ms." >นางสาว / Ms.</option>
                            <option value="Boy." >เด็กชาย / Boy.</option>
                            <option value="Girl." >เด็กหญิง / Girl.</option>
                        </select>
                    </div>

                    {{-- District box --}}
                    <div class="block District-box">
                        <label for="" class="block">District <span class="text-[red]">*</span></label>
                        <input type="text" placeholder="Enter your real name" class="placeholder-[black] mt-1 bg-[white] h-[2.8rem] w-full outline outline-1 outline-[#d6dbe0] rounded-md appearance-none pl-4 font-semibold focus:outline-[6px] 
               focus:outline-[#c3d4fe] transition-all duration-500 ease-out">
                    </div>

                    {{-- Subdistrict box --}}
                    <div class="block Subdistrict-box">
                        <label for="" class="block">Subdistrict <span class="text-[red]">*</span></label>
                        <input type="text" placeholder="Enter your Lastname" class="placeholder-[black] mt-1 bg-[white] h-[2.8rem] w-full outline outline-1 outline-[#d6dbe0] rounded-md appearance-none pl-4 font-semibold focus:outline-[6px] 
                        focus:outline-[#c3d4fe] transition-all duration-500 ease-out">
                    </div>
                </div>

                {{-- Spacing and Horizontial line --}}
                <div class="mb-[1.5rem] spacing"></div>
                <hr style="height:10px; width:100%;text-align:left;margin-left:0">
                <div class="mb-[1rem] spacing"></div>

                {{-- --------------------------------------------------------------------------------------------------------------------------------------------------------------- --}}

                {{-- Email box --}}
                <div class="block Email-box"> 
                    <label for="" class="block">Email <span class="text-[red]">*</span></label>
                    <input type="text" placeholder="Enter your email" class="placeholder-[black] mt-1 bg-[white] h-[2.8rem] w-full outline outline-1 outline-[#d6dbe0] rounded-md appearance-none pl-4 font-semibold focus:outline-[6px] 
               focus:outline-[#c3d4fe] transition-all duration-500 ease-out">
                </div>

                <div class="mb-[1.5rem] spacing"></div>
                <hr style="height:10px; width:100%;text-align:left;margin-left:0">
                <div class="mb-[1rem] spacing"></div>

                {{-- --------------------------------------------------------------------------------------------------------------------------------------------------------------- --}}

                {{-- Password --}}
                <div class="grid grid-cols-2 gap-x-4 Password-box">
                    <div class="block Years-box">
                        <label for="" class="block">Password <span class="text-[red]">*</span></label>
                        <input type="text" placeholder="Enter your Password" class="placeholder-[black] mt-1 bg-[white] h-[2.8rem] w-full outline outline-1 outline-[#d6dbe0] rounded-md appearance-none pl-4 font-semibold focus:outline-[6px] 
                        focus:outline-[#c3d4fe] transition-all duration-500 ease-out">
                    </div>

                    <div class="block Years-box">
                        <label for="" class="block">Confirm Password <span class="text-[red]">*</span></label>
                        <input type="text" placeholder="Confirm Password" class="placeholder-[black] mt-1 bg-[white] h-[2.8rem] w-full outline outline-1 outline-[#d6dbe0] rounded-md appearance-none pl-4 font-semibold focus:outline-[6px] 
                        focus:outline-[#c3d4fe] transition-all duration-500 ease-out">
                    </div>
                </div>

                <div class="mb-[1.5rem] spacing"></div>
                <hr style="height:10px; width:100%;text-align:left;margin-left:0">
                <div class="mb-[1rem] spacing"></div>

                {{-- --------------------------------------------------------------------------------------------------------------------------------------------------------------- --}}
                
                {{-- Phone number box --}}
                <div class="block Phone-box"> 
                    <label for="" class="block">Telephone number <span class="text-[red]">*</span></label>
                    <input type="text" placeholder="Enter your telephone number" class="placeholder-[black] mt-1 bg-[white] h-[2.8rem] w-full outline outline-1 outline-[#d6dbe0] rounded-md appearance-none pl-4 font-semibold focus:outline-[6px] 
               focus:outline-[#c3d4fe] transition-all duration-500 ease-out">
                </div>

                <div class="mb-[3rem] spacing"></div>
                
                {{-- --------------------------------------------------------------------------------------------------------------------------------------------------------------- --}}

                {{-- Term of services --}}
                <div class="flex items-center gap-x-4 term-of-services">
                    <input type="checkbox" id="" name="" value="">
                    <p class="font-[480]">I accept all messages in <span class="text-[#223851] hover:text-[#1760c0] cursor-pointer">Terms of Service</span></p>
                </div>

                <div class="mb-[1.5rem] spacing"></div>

                <div class="flex items-start gap-x-4 term-of-services">
                    <input type="checkbox" id="" name="" value="">
                    <p class="font-[480]">I understand and acknowledge that medical information is considered confidential patient information, which all personnel at Bangkok Hospital Chanthaburi have a duty to keep confidential and cannot disclose any information to others without permission from the patient or legal representative. Therefore, medical information removed from the hospital is not the responsibility of Bangkok Hospital Chanthaburi. In addition, in the event that I allow another person to request health information on my behalf, this letter shall be considered my power of attorney, allowing the person I have named above to be authorized to act on my behalf.</p>
                </div>

                <div class="mb-[3rem] spacing"></div>

                {{-- --------------------------------------------------------------------------------------------------------------------------------------------------------------- --}}

                {{-- Submit Button --}}
                <div class="text-center">
                    <button class="bg-[#031e61] text-[white] text-2xl rounded-xl p-4 px-10">Register</button>
                </div>

            </form>
        </section>
        
    </main>


    <footer>
        @include('components.footer')
    </footer>

</body>
</html>