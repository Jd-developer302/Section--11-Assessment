<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Array Functions - {{ config('app.name', 'Laravel') }}</title>
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
    <style>
        body {
            font-family: system-ui, -apple-system, sans-serif;
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f5f5f5;
        }
        .container {
            background: white;
            border-radius: 8px;
            padding: 30px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        h1 {
            color: #333;
            margin-bottom: 30px;
            border-bottom: 2px solid #007bff;
            padding-bottom: 10px;
        }
        .section {
            margin-bottom: 40px;
        }
        .section h2 {
            color: #007bff;
            margin-bottom: 15px;
            font-size: 1.5em;
        }
        .section h3 {
            color: #666;
            margin-bottom: 10px;
            font-size: 1.1em;
            font-weight: 600;
        }
        pre {
            background: #f8f9fa;
            border: 1px solid #dee2e6;
            border-radius: 4px;
            padding: 15px;
            overflow-x: auto;
            font-size: 14px;
            line-height: 1.5;
        }
        code {
            color: #e83e8c;
        }
        .function-name {
            color: #28a745;
            font-weight: bold;
        }
        .back-link {
            display: inline-block;
            margin-bottom: 20px;
            color: #007bff;
            text-decoration: none;
        }
        .back-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <a href="{{ url('/') }}" class="back-link">← Back to Home</a>
        
        <h1>Array Functions Demonstration</h1>

        <div class="section">
            <h2>Original Data</h2>
            <pre><code>$arrayOfObjects = @json($original, JSON_PRETTY_PRINT);</code></pre>
        </div>

        <div class="section">
            <h2>Function 1: Sort by Age (Descending)</h2>
            <h3><span class="function-name">sortByAgeDescending()</span> - Sorts the array by age in descending order</h3>
            <pre><code>@json($sortedByAge, JSON_PRETTY_PRINT)</code></pre>
        </div>

        <div class="section">
            <h2>Function 2: Extract Ages Array</h2>
            <h3><span class="function-name">extractAges()</span> - Returns array of just the ages</h3>
            <pre><code>@json($agesArray, JSON_PRETTY_PRINT)</code></pre>
        </div>

        <div class="section">
            <h2>Function 3: Convert to Array of Arrays (Age as Key)</h2>
            <h3><span class="function-name">convertToArrayOfArrays()</span> - Converts array using 'age' as array key</h3>
            <pre><code>@json($arrayOfArrays, JSON_PRETTY_PRINT)</code></pre>
        </div>
    </div>
</body>
</html>

