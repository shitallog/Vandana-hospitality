<x-app-layout>

<main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
 <div class="container mx-auto px-6 py-2">
   <a href="{{ route('jobs.index') }}"  class="bg-blue-500 text-white font-bold px-5 py-1 rounded focus:outline-none shadow hover:bg-blue-500 transition-colors">Back</a>
    <h1>{{ isset($job) ? 'Edit Job' : 'Add New Job' }}</h1>
	   <div class="bg-white shadow-md rounded my-6 p-5">
    <form action="{{ isset($job) ? route('jobs.update', $job->id) : route('jobs.store') }}" method="POST">
        @csrf
        @if(isset($job))
            @method('PUT')
        @endif
        <div class="flex flex-col space-y-2">
            <label class="text-gray-700 select-none font-medium" for="title">Title</label>
            <input class="px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-200" type="text" name="title" class="form-control" value="{{ isset($job) ? $job->title : '' }}">
        </div>
        <div class="flex flex-col space-y-2">
            <label class="text-gray-700 select-none font-medium" for="qualification">Qualification</label>
            <input class="px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-200" type="text" name="qualification" class="form-control" value="{{ isset($job) ? $job->qualification : '' }}">
        </div>
       <div class="flex flex-col space-y-2">
            <label class="text-gray-700 select-none font-medium"   for="experience">Experience</label>
            <input class="px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-200"type="text" name="experience" class="form-control" value="{{ isset($job) ? $job->experience : '' }}">
        </div>
 <div class="flex flex-col space-y-2">
            <label class="text-gray-700 select-none font-medium" for="description">Description</label>
            <textarea name="description" class="px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-200">{{ isset($job) ? $job->description : '' }}</textarea>
        </div>
		  <div class="text-center mt-16 mb-16">
        <button class="bg-blue-500 text-white font-bold px-5 py-1 rounded focus:outline-none shadow hover:bg-blue-500 transition-colors " type="submit" class="btn btn-primary">{{ isset($job) ? 'Update' : 'Save' }}</button>
		</div>
    </form>
</div>
</div>
</main>
</x-app-layout>
