<x-app-layout>

<main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
 <div class="container mx-auto px-6 py-2">
    <a href="{{ route('jobs.index') }}"  class="bg-blue-500 text-white font-bold px-5 py-1 rounded focus:outline-none shadow hover:bg-blue-500 transition-colors">Back</a>

    <h1>Edit Job</h1>
	  <div class="bg-white shadow-md rounded my-6 p-5">
    <form action="{{ route('jobs.update', $job->id) }}" method="POST">
        @csrf
        @method('PUT')
          <div class="flex flex-col space-y-2">
            <label  class="text-gray-700 select-none font-medium"  for="title">Title</label>
            <input type="text" name="title" class="form-control" value="{{ $job->title }}" required>
        </div>
         <div class="flex flex-col space-y-2">
            <label  class="text-gray-700 select-none font-medium"  for="qualification">Qualification</label>
            <input type="text" name="qualification" class="form-control" value="{{ $job->qualification }}" required>
        </div>
        <div class="flex flex-col space-y-2">
            <label  class="text-gray-700 select-none font-medium" for="experience">Experience</label>
            <input type="text" name="experience" class="form-control" value="{{ $job->experience }}" required>
        </div>
         <div class="flex flex-col space-y-2">
            <label  class="text-gray-700 select-none font-medium"  for="description">Description</label>
            <textarea name="description" class="form-control" required>{{ $job->description }}</textarea>
        </div>
		  <div class="text-center mt-16 mb-16">
        <button class="bg-blue-500 text-white font-bold px-5 py-1 rounded focus:outline-none shadow hover:bg-blue-500 transition-colors " type="submit" class="btn btn-primary">Update</button>
		</div>
    </form>
</div>
</div>
</main>
</x-app-layout>
