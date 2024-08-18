<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document Checklist</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100 flex flex-col min-h-screen">
    {{-- @include('components.navbar') --}}
    <main class="flex-grow container mx-auto p-6 flex flex-col items-center">
        <h1 class="text-3xl font-bold text-gray-800 mb-12">Application for Re-accreditation</h1>
          {{-- @include('components.progress', ['step' => 2]) --}}
        <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 w-full max-w-lg">
            <h2 class="text-xl font-bold text-gray-800 mb-4">Document Checklist</h2>
            {{-- <form action="{{ route('reaccreditationStep3') }}" method="GET"> --}}
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="document1">
                        <input type="checkbox" id="document1" name="document1">
                        Accomplished Application Form
                    </label>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="document2">
                        <input type="checkbox" id="document2" name="document2">
                        Certificate of Involvement/Commitment/ Acceptance of the Adviser of Student Organizations
                    </label>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="document3">
                        <input type="checkbox" id="document3" name="document3">
                        Certificate of Involvement/Commitment/ Acceptance of the President of Student Organizations
                    </label>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="document4">
                        <input type="checkbox" id="document4" name="document4">
                        Accomplishment Report
                    </label>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="document5">
                        <input type="checkbox" id="document5" name="document5">
                        Financial Report
                    </label>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="document6">
                        <input type="checkbox" id="document6" name="document6">
                        Action Plan and Financial Plan
                    </label>
                </div>
                <div class="flex items-center justify-between">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                        Next
                    </button>
                </div>
            </form>
        </div>
    </main>
</body>
</html>
