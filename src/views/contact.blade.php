<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bismillah Hirrahman Nirrahim</title>
</head>
<body>
    <h1>{{$title}}</h1>
    <form action="{{route('contact.send')}}" method="post">
        @csrf 
        <input type="text" name="name" placeholder="Your Name Please">
        <br />
        <input type="text" name="email" placeholder="Your Email Please">
        <br />
        <textarea name="message" cols="30" rows="10"  placeholder="Your Query"></textarea>
        <br />
        <button type="submit">Submit</button>
    </form>

    <table border="1">
        <tr>
            <th>Sr No</th>
            <th>Name</th>
            <th>Email</th>
            <th>Message</th>
            <th>Created At</th>
        </tr>
        @if (!empty($result))
        @foreach ($result as $key => $value)
        <tr>
            <td>{{$key+1}}</td>
            <td>{{$value['name']}}</td>
            <td>{{$value['email']}}</td>
            <td>{{$value['message']}}</td>
            <td>{{date('d-m-Y',strtotime($value['created_at']))}}</td>
        </tr> 
        @endforeach  
        @else 
        <tr>
            <td colspan="5">No Data Found</td>
        </tr>
        @endif
       
       
       

    </table>
</body>
</html>