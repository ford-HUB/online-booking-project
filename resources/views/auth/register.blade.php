@vite('resources/css/app.css')
<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link href="https://fonts.googleapis.com/css2?family=Edu+AU+VIC+WA+NT+Pre:wght@400..700&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet" />
@extends('layouts.navbar-auth-register')

@section('navbar-auth-register')
          <div class="bg-white">
            <!-- component -->
            <div class="bg-gray-100 min-h-screen md:min-h-[550px] flex items-center justify-center">
                <div class="w-full max-w-md md:max-w-3xl p-6 md:p-10 bg-white rounded-lg shadow-lg">
                    
                    <!-- Progress Indicator -->
                    <div class="flex flex-col md:flex-row justify-between items-center mb-8 space-y-4 md:space-y-0">
                        <div class="flex items-center">
                            <div id="step1" class="w-8 h-8 md:w-10 md:h-10 flex items-center justify-center rounded-full bg-[#111827] text-white text-sm md:text-base">1</div>
                            <span class="ml-2 text-gray-700 text-sm md:text-base">Personal Info</span>
                        </div>
                        <div class="flex items-center">
                            <div id="step2" class="w-8 h-8 md:w-10 md:h-10 flex items-center justify-center rounded-full bg-gray-300 text-gray-500 text-sm md:text-base">2</div>
                            <span class="ml-2 text-gray-700 text-sm md:text-base">Account Details</span>
                        </div>
                        <div class="flex items-center">
                            <div id="step3" class="w-8 h-8 md:w-10 md:h-10 flex items-center justify-center rounded-full bg-gray-300 text-gray-500 text-sm md:text-base">3</div>
                            <span class="ml-2 text-gray-700 text-sm md:text-base">Confirmation</span>
                        </div>
                    </div>

                    <!-- Step Content -->
                    <form id="registrationForm" method="POST" action="{{ route('register') }} ">
                        @csrf
                        <div id="stepContent1" class="step-content">
                            <h2 class="text-lg md:text-2xl font-semibold mb-4">Personal Info</h2>
                            <div class="mb-4">
                                <label class="block text-gray-700 text-sm md:text-base">Full Name</label>
                                <input type="text" name="name" class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-[#111827]" placeholder="Enter your Full Name" required autocomplete="false">
                            </div>
                            <div class="mb-4">
                                <label class="block text-gray-700 text-sm md:text-base">Email</label>
                                <input type="email" name="email" class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-[#111827]" placeholder="Email Address" required autocomplete="false">
                            </div>
                        </div>

                        <div id="stepContent2" class="step-content hidden">
                            <h2 class="text-lg md:text-2xl font-semibold mb-4">Account Details</h2>
                            <div class="mb-4">
                                <label class="block text-gray-700 text-sm md:text-base">Username</label>
                                <input type="text" name="username" class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-[#111827]" placeholder="Username" required autocomplete="false">
                            </div>
                            <div class="mb-4">
                                <label class="block text-gray-700 text-sm md:text-base">Password</label>
                                <input type="password" name="password" class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-[#111827]" placeholder="Password" required autocomplete="false">
                            </div>
                        </div>

                        <div id="stepContent3" class="step-content hidden">
                            <h2 class="text-lg md:text-2xl font-semibold mb-4">Confirmation</h2>
                            <p class="text-gray-700 text-sm md:text-base">Please review your details and click "Submit" to complete your registration.</p>
                        </div>

                        <!-- Navigation Buttons -->
                        <div class="flex justify-between mt-6">
                            <button id="prevButton" class="px-4 py-2 bg-gray-300 text-gray-700 rounded disabled:opacity-50 disabled:cursor-not-allowed transition duration-300" disabled>Previous</button>
                            <button id="nextButton" type="button" class="px-4 py-2 bg-[#111827] text-white rounded transition duration-300 hover:bg-[#4a4c50]">Next</button>
                        </div>
                    </form>
                </div>
            </div>

            <script>
              // JavaScript to manage steps
              const steps = ["step1", "step2", "step3"];
              const stepContents = ["stepContent1", "stepContent2", "stepContent3"];
              let currentStep = 0;
            
              const prevButton = document.getElementById("prevButton");
              const nextButton = document.getElementById("nextButton");
              const form = document.getElementById("registrationForm");
            
              function updateStep() {
                  // Update progress indicators
                  steps.forEach((step, index) => {
                      const stepElement = document.getElementById(step);
                      if (index === currentStep) {
                          stepElement.classList.add("bg-[#111827]", "text-white");
                          stepElement.classList.remove("bg-gray-300", "text-gray-500");
                      } else {
                          stepElement.classList.add("bg-gray-300", "text-gray-500");
                          stepElement.classList.remove("bg-[#111827]", "text-white");
                      }
                  });
            
                  // Show/Hide step content
                  stepContents.forEach((content, index) => {
                      const contentElement = document.getElementById(content);
                      contentElement.classList.toggle("hidden", index !== currentStep);
                  });
            
                  // Update button states
                  prevButton.disabled = currentStep === 0;
                  nextButton.textContent = currentStep === steps.length - 1 ? "Submit" : "Next";
              }
            
              prevButton.addEventListener("click", () => {
                  if (currentStep > 0) currentStep--;
                  updateStep();
              });
            
              nextButton.addEventListener("click", (e) => {
                  if (currentStep < steps.length - 1) {
                      // Proceed to the next step
                      currentStep++;
                      updateStep();
                  } else if (currentStep === steps.length - 1) {
                      // Submit the form on the last step
                      form.submit();
                  }
              });
            
              // Initialize steps
              updateStep();
            </script>
          </div>
@endsection
