@extends('voter.layout.master')
<title>Result</title>
<link rel="stylesheet" href="{{ asset('assets/css/voter/vote.css') }}">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link rel="stylesheet" href="{{ asset('assets/css/voter/voting.css') }}">
@section('content')
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <!-- Display Error Message -->
    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
    <div class="container option1">
        <h1>Choose candidate to vote for</h1>
        <div class="container">
            <form action="{{ route('front_vote') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <h3>Candidate</h3>
                        @foreach ($can as $ca)
                            <div class="" style="display:block;">
                                <input type="radio" value="{{ $ca->id }}" name="candidate_id">
                                <label for="">{{ $ca->name }}</label>
                            </div>
                        @endforeach
                    </div>
                    <div class="col-md-6">
                        <button class="btn btn-primary mt-2" type="submit">Vote</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', (event) => {
            // Sample options
            const options = ['Candidate 1', 'Candidate 2', 'Candidate 3', 'Candidate 4', 'Candidate 5'];
            const availableOptionsList = document.getElementById('availableOptions');
            const selectedOptionsList = document.getElementById('selectedOptions');
            const submitButton = document.getElementById('submitSelectedOption');

            // Render available options
            options.forEach(option => {
                const listItem = document.createElement('li');
                listItem.classList.add('list-group-item', 'd-flex', 'justify-content-between',
                    'align-items-center');
                listItem.textContent = option;

                const addButton = document.createElement('button');
                addButton.classList.add('btn', 'btn-primary', 'btn-sm');
                addButton.textContent = 'Select';
                addButton.addEventListener('click', () => selectOption(option));

                listItem.appendChild(addButton);
                availableOptionsList.appendChild(listItem);
            });

            let selectedOption = null;

            function selectOption(option) {
                // Clear previously selected option
                if (selectedOption) {
                    selectedOptionsList.innerHTML = '';
                }

                selectedOption = option;
                renderSelectedOption();
            }

            function renderSelectedOption() {
                selectedOptionsList.innerHTML = '';

                if (selectedOption) {
                    const listItem = document.createElement('li');
                    listItem.classList.add('list-group-item', 'd-flex', 'justify-content-between',
                        'align-items-center');
                    listItem.textContent = selectedOption;

                    const removeButton = document.createElement('button');
                    removeButton.classList.add('btn', 'btn-danger', 'btn-sm');
                    removeButton.textContent = 'Deselect';
                    removeButton.addEventListener('click', () => selectOption(null));

                    listItem.appendChild(removeButton);
                    selectedOptionsList.appendChild(listItem);
                }
            }

            submitButton.addEventListener('click', () => {
                if (selectedOption) {
                    console.log('Submitted option:', selectedOption);
                    // You can add your custom logic here, e.g., send the selected option to a server
                } else {
                    alert('Please select an option before submitting.');
                }
            });
        });
    </script>
@stop
