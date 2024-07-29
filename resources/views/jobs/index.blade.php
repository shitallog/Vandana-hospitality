<x-app-layout>

<main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
 <div class="container mx-auto px-6 py-2">
   <div class="text-right">
    <h1 class="font-bold">Job Postings</h1>
	</div>
    <a href="{{ route('jobs.create') }}"  class="bg-blue-500 text-white font-bold px-5 py-1 rounded focus:outline-none shadow hover:bg-blue-500 transition-colors">Add New Job</a>
     <div class="bg-white shadow-md rounded my-6">
	<table class="text-left w-full border-collapse">
        <thead>
            <tr>
                <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light">Title</th>
                <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light">Qualification</th>
                <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light">Experience</th>
                <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light">Description</th>
                <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($jobs as $job)
                <tr>
                    <td class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light">{{ $job->title }}</td>
                    <td class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light">{{ $job->qualification }}</td>
                    <td class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light">{{ $job->experience }}</td>
                    <td class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light">{{ $job->description }}</td>
                    <td>
                        <a href="{{ route('jobs.edit', $job->id) }}" class="text-grey-lighter font-bold py-1 px-3 rounded text-xs bg-green hover:bg-green-dark text-blue-400">Edit</a>
						 <a href="{{ route('jobs.show', $job->id) }}" class="text-grey-lighter font-bold py-1 px-3 rounded text-xs bg-green hover:bg-green-dark text-blue-400">view</a>
                        <form action="{{ route('jobs.destroy', $job->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit"class="text-grey-lighter font-bold py-1 px-3 rounded text-xs bg-blue hover:bg-blue-dark text-red-400">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
	</div>
</div>
</main>
</x-app-layout>
