System Requirement : PHP 5.6.*, 
Laravel : 5.4 
Step 1 : Clone Project(git clone ) 
Step 2 : composer update 
Step 3 : Change Database Connection .env File 
Step 4 : run migrations : php artisan migrate 
Step 5 : Run Project : php artisan serve 
Step 6 : Open Post Man 
Step 7 : 
Register API : http://127.0.0.1:8000/api/register Method : POST  
                    Body-> form-data: email : {email}, 
                    password : {Password}, 
                    Click on Send 
Login : http://127.0.0.1:8000/api/login 
            POST method Body->form-data keys...email : {email}, 
            password : {password} 
            Click on Send 
Get Notes By user id : http://127.0.0.1:8000/api/notes/all 
                    Method : POST 
                    Headers -> Authorization : Bearer , Accept : application/json, 
                    Body->form-data user_id : {user_id}

Get Note By id : http://127.0.0.1:8000/api/notes/{id} 
                    Method : GET 
                    Headers -> Authorization : Bearer , Accept : application/json, 
                    
Add Note  : http://127.0.0.1:8000/api/notes 
                    Method : POST 
                    Headers -> Authorization : Bearer , Accept : application/json, 
                    Body->form-data user_id : {user_id}
                                    title : {title}
                                    note : {note data}

Update Notes By id : http://127.0.0.1:8000/api/notes/{id} 
                    Method : PUT
                    Headers -> Authorization : Bearer , Accept : application/json, 
                    Body->form-data id : {note id}

Update Notes By id : http://127.0.0.1:8000/api/notes/{id} 
                    Method : Delete
                    Headers -> Authorization : Bearer , Accept : application/json, 
                    Body->form-data id : {note id}


Encryption keys generated successfully.
Personal access client created successfully.
Client ID: 1
Client Secret: GvUFhgsGQW15E6DZoor7puazJDqctIwRLG2MkXEr
Password grant client created successfully.
Client ID: 2
Client Secret: GVyvVCe06w9cxGdbSpyxnxFI92xojKPQjWURbhnb