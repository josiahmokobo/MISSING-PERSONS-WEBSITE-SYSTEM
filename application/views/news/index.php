<table  width="600" style="border-radius: .5em; border: solid; border-color: green;" align="center">

<?php foreach ($news as $news_item): ?>
     <tr>
    <td style="border-bottom:solid; border-bottom-color: green; padding: 0 0; border-bottom-right-radius: .45em; border-bottom-left-radius: .45em">
    <h2><?php echo $news_item['title'] ?></h2>
    </td>
    <td style="border-bottom:solid; border-bottom-color: green; padding: 0 0; border-bottom-right-radius: .45em; border-bottom-left-radius: .45em">
    <img src="http://localhost/CI/images/image.jpg" alt="my photo" height="130" width="149" />    
    <td style="border-bottom:solid; border-bottom-color: green; padding: 0 0; border-bottom-right-radius: .45em; border-bottom-left-radius: .45em">
  jsebhfu3ub4rtfuedbhvyure jwhegryugh3ywreyugfr3ygrfyedyygyegsdjsbdhfuuuuuuucbe y34r78wey743yen jh3b4rvetr3478fhre78hy7843r7e8

    <a href="news/<?php echo $news_item['slug'] ?>">click here</a>
    <span>if you know the person</span>
    </td>
    </tr>
<?php endforeach ?>
</table>
