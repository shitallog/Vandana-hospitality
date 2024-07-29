<x-app-layout>

<main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
 <div class="container mx-auto px-6 py-2">
     <a href="{{ route('jobs.index') }}"  class="bg-blue-500 text-left text-white font-bold px-5 py-1 rounded focus:outline-none shadow hover:bg-blue-500 transition-colors">Back</a>

    <h1 class="text-center mt-16 mb-16">{{ $job->title }}</h1>
	  <div class="bg-white shadow-md rounded my-6 p-5">
	    <div class="flex flex-col space-y-2">
      <label class="text-gray-700 select-none font-medium" for="title"> Qualification: </strong>{{ $job->qualification }}</label>
	</div>
	  <div class="flex flex-col space-y-2">
       <label class="text-gray-700 select-none font-medium" for="title">Experience: </strong>{{ $job->experience }}</p></label>
	</div>
	  <div class="flex flex-col space-y-2">
       <label class="text-gray-700 select-none font-medium" for="title">Description: </strong>{{ $job->description }}</p></label>
	</div>
	</div>
</div>
</main>
</x-app-layout>
