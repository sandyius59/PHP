<?php
/***********************************************************************************
 * @Execution : default node : cmd> adapter.php
 *
 *
 * @Purpose :The adapter design pattern is a structural design pattern that allows
 * two unrelated/uncommon interfaces to work together.
 *
 * @description :We will not make any changes in the external class library because
 * we do not have control over it and it may change any time.
 *
 * @overview : adapter desing pattern
 * @author : sandeep kumar maurya <sandeepkumarraj58@gmail.com>
 * @version : 1.0
 * @since : 28-aug-2019
 *
 ***********************************************************************************/

class SimpleBook
{
    private $author;
    private $title;
    public function __construct($author_in, $title_in)
    {
        $this->author = $author_in;
        $this->title = $title_in;
    }
    public function getAuthor()
    {
        return $this->author;
    }
    public function getTitle()
    {
        return $this->title;
    }
}
class BookAdapter
{
    private $book;
    public function __construct(SimpleBook $book_in)
    {
        $this->book = $book_in;
    }
    public function getAuthorAndTitle()
    {
        return $this->book->getTitle() . ' by ' . $this->book->getAuthor();
    }
}
// Usage
try
{
    $book = new SimpleBook("Gamma, Helm, Johnson, and Vlissides", "Design Patterns");
    $bookAdapter = new BookAdapter($book);
    echo 'Author and Title: ' . $bookAdapter->getAuthorAndTitle();
// function echo $line_in)
    // {
    //   echo $line_in."<br/>";
    // }
} catch (Exception $e) {
    echo $e;
}
