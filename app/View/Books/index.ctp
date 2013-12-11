<!-- File: /app/View/Books/index.ctp -->
<h1>Blog Books</h1>
<table>
<tr>
<th>Id</th>
<th>Title</th>
<th>Created</th>
</tr>
<!-- Here is where we loop through our $posts array, printing out post info -->
<?php foreach($books as $book) : ?>
<tr>
<td>
<?php echo $book['Book']['id'];?>
</td>
<td>
<?php echo $book['Book']['name']; ?>
</td>
<td><?php echo $book['Book']['created_date'];?></td>
<tr>
<?php endforeach ;?>
<?php unset($book); ?>
</table>