<x-app-layout>
    <form action="{{ route('process.update', $process) }}" method="POST">
        @method('PUT')
        @csrf
        <label for="name"></label><br>
        <input type="text" name="name" id="name" placeholder="name" value="{{ $process->name }}"><br>

        <label for="description">description</label><br>
        <textarea name="description" id="description" cols="30" rows="10">{{ $process->description }}</textarea>

        <input type="submit" value="edit">

    </form>
</x-app-layout>
