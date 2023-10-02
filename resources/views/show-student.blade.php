<x-layout>
    <x-slot:pageTitle>View Student</x-slot:pageTitle>
    <x-slot:heading>{{$student->name}} Details</x-slot:heading>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eaque tempora, iure eligendi, laboriosam ducimus fuga unde in ullam impedit quam libero dolorem voluptatum doloribus atque architecto nulla? Repellendus blanditiis autem molestiae ipsa ullam facere quos praesentium voluptatibus, neque suscipit! Quos reprehenderit architecto ducimus nesciunt maiores eligendi tempora voluptatem placeat numquam.</p>
    <a href={{URL()->previous()}}><button class="btn btn-primary">Back</button></a>
</x-layout>
