 @props([
     'heading' => 'Unlock Your Career Potential',
     'subheading' => 'Discover the perfect job opportunity for you.',
 ])

 {{-- @props(['title' =>' Find Your Dream Job']) --}}

 <!-- Top Banner -->
 <section class="bg-blue-900 text-white py-6 text-center">
     <div class="container mx-auto">
         <h2 class="text-3xl font-semibold">
             {{ $heading }}
         </h2>
         <p class="text-lg mt-2">
             {{ $subheading }}
         </p>
     </div>
 </section>
