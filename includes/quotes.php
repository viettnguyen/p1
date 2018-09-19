<?php
    $quoteArray = [ 0 => 'Insufficient facts always invite danger. — Spock', 
    1 => 'I canna’ change the laws of physics. — Montgomery “Scotty” Scott', 'KHAAANNN! — Captain James T. Kirk', 
    2 => 'There is a way out of every box, a solution to every puzzle; it’s just a matter of finding it. — Captain Jean-Luc Picard', 
    3 => 'There’s still much to do; still so much to learn. Mr. La Forge – engage! ― Captain Picard',
    4 => 'Seize the time... Live now! Make now always the most precious time. Now will never come again. ― Jean-Luc Picard'];
    ?>
<?php echo '<blockquote>' . $quoteArray[rand(0, 4)] . '</blockquote>'; ?>