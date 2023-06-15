<!DOCTYPE html>
<html>
<head>
    <title>Add New App</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.15/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto py-8">
        <h2 class="text-2xl font-bold mb-4">Add New App</h2>
        <form action="post.php" method="POST" class="max-w-md bg-white p-6 rounded-lg shadow-md">
            <div class="mb-4">
                <label for="name" class="block text-gray-700 font-bold mb-2">Name:</label>
                <input type="text" name="name" id="name" required class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div class="mb-4">
                <label for="description" class="block text-gray-700 font-bold mb-2">Description:</label>
                <textarea name="description" id="description" required class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
            </div>

            <div class="mb-4">
                <label for="category" class="block text-gray-700 font-bold mb-2">Category:</label>
                <input type="text" name="category" id="category" required class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div class="mb-4">
                <label for="version" class="block text-gray-700 font-bold mb-2">Version:</label>
                <input type="text" name="version" id="version" required class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div class="mb-4">
                <label for="screenshots" class="block text-gray-700 font-bold mb-2">Screenshots:</label>
                <input type="text" name="screenshots" id="screenshots" required class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div class="mb-4">
                <label for="icon" class="block text-gray-700 font-bold mb-2">Icon:</label>
                <input type="text" name="icon" id="icon" required class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div class="mb-4">
                <label for="supported_platforms" class="block text-gray-700 font-bold mb-2">Supported Platforms:</label>
                <input type="text" name="supported_platforms" id="supported_platforms" required class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div class="mb-4">
                <label for="app_url" class="block text-gray-700 font-bold mb-2">App URL:</label>
                <input type="text" name="app_url" id="app_url" required class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div class="mb-4">
                <label for="size" class="block text-gray-700 font-bold mb-2">Size:</label>
                <input type="text" name="size" id="size" required class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div class="mb-4">
                <label for="developer" class="block text-gray-700 font-bold mb-2">Developer:</label>
                <input type="text" name="developer" id="developer" required class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            
            <div class="mb-4">
                <label for="package" class="block text-gray-700 font-bold mb-2">Package:</label>
                <input type="text" name="package" id="package" required class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            
            <div class="mb-4">
                <label for="release_notes" class="block text-gray-700 font-bold mb-2">Release Notes:</label>
                <textarea name="release_notes" id="release_notes" required class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
            </div>
            
            <div class="mb-4">
                <label for="pricing_and_monetization" class="block text-gray-700 font-bold mb-2">Pricing and Monetization:</label>
                <input type="text" name="pricing_and_monetization" id="pricing_and_monetization" required class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            
            <div class="mb-4">
                <label for="system_requirements" class="block text-gray-700 font-bold mb-2">System Requirements:</label>
                <textarea name="system_requirements" id="system_requirements" required class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
            </div>
            
            <div class="mb-4">
                <label for="privacy_policy" class="block text-gray-700 font-bold mb-2">Privacy Policy:</label>
                <input type="text" name="privacy_policy" id="privacy_policy" required class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            
            <div class="mb-4">
                <label for="rating" class="block text-gray-700 font-bold mb-2">Rating:</label>
                <input type="number" name="rating" id="rating" step="0.1" min="0" max="5" required class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div class="mt-6">
                <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600">Submit</button>
            </div>
        </form>
    </div>
</body>
</html>
