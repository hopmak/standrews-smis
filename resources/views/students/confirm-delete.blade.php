<!-- resources/views/students/confirm-delete.blade.php -->

@extends('layout')

@section('title', 'Confirm Delete')

@section('content')
    <h2>Confirm Delete</h2>

    <script>
        // Function to show the confirmation popup
        function confirmDelete() {
            Swal.fire({
                title: 'Are you sure?',
                text: 'You won\'t be able to revert this!',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                // If the user clicks "Yes", proceed with the delete
                if (result.isConfirmed) {
                    window.location.href = '{{ route('students.delete', $students->id) }}';
                }
            });
        }

        // Automatically call the function when the page loads
        document.addEventListener('DOMContentLoaded', function() {
            confirmDelete();
        });
    </script>
@endsection
