<!-- Create tables book (bookid, title, author) and issue (issue_date, bookid, student_name). 
Insert ten rows to book table and write a PHP code to issue the books 
' -->

<html>
    <head>
        <title>form</title>
    </head>
    <body>
        <form action="setdate.php" method="post">
            BOOK ID : <input type="number" name="bookid" placeholder="enter the bookid"><br><br>
            STUDENT NAME : <input type="text" name="name" placeholder="enter the student name"><br><br>
            <input type="submit" name="btn" value="issuedate">
        </form>
    </body>
</html>