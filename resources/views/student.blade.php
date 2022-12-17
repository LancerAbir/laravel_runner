<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Form</title>
</head>
<body>
<div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="flex">
                        <h2> Create A Student Data </h2>
                    
                        <form action="{{route('studentForm')}}" method="post">
                            @csrf
                            <label> Student Name </label>
                            <input type="text" name="name" class="form-control" placeholder="Type Student Name" /> <br/>
                            <label> Student Contact Number </label>
                            <input type="text" name="number" class="form-control" placeholder="Type Student Contact Number" /><br/>
                            <label> Student Email Address </label>
                            <input type="email" name="email" class="form-control" placeholder="Email Address" /><br/>
                            <textarea name="description" cols="30" rows="10"  class="form-control" placeholder="Student Information"></textarea><br/>
                            <button type="submit">Add Student Data</button>
                        </form>
                        
                       
                    </div>   
                </div>
            </div>
        </div>
    </div>
</body>
</html>