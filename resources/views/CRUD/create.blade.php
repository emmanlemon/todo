<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ url('css/create.css') }}">
    <title>Create TODO</title>
</head>
<body>
    <div class="create_todo">
        <form action="/todo" method="post">
            @csrf
           <p>Create TO-DO</p>
            <div class="container">
                <label>Name:</label>
                <input type="text" name="name" placeholder="Input Your Name" value={{ old('name') }}>
                @error('name')
                <div class="error">
                    <span>{{ $message }}</span>
                </div>
                @enderror
            </div>
            <div class="container">
                <label>Title:</label>
                <input type="text" name="title" placeholder="Input your Title" value={{ old('title') }}>
                @error('title')
                <div class="error">
                    <span>{{ $message }}</span>
                </div>
                @enderror
            </div>
            <div class="container">
                <label>Description</label>
                <textarea name="description" placeholder="Input your Description" value={{ old('description')}}></textarea>
                @error('description')
                <div class="error">
                    <span>{{ $message }}</span>
                </div>
                @enderror
            </div>
            <div class="container">
                <label for="date">Date</label>
                <input type="date" name="date">
                @error('date')
                <div class="error">
                    <span>{{ $message }}</span>
                </div>
                @enderror
            </div>
            
          
        <button name="btn">Save</button>
        <button type="reset" name="btn">Reset</button>
        </form>
    </div>
</body>
</html>