<article itemscope itemtype="https://schema.org/Book" id="post-<?php the_ID(); ?>" class="article-list">

	<h2 itemprop="name"><?php the_title(); ?></h2>
	
	<?php

	$thumbnail = get_the_post_thumbnail_url(); 
	$editors = get_field("editors");
	$pubTitle = get_field("publication");
	$volumeDetails = get_field("volume");
	$pages = get_field("pages");
	$publisher = get_field("publisher");
	$pubDate = get_field("publication_date");
	$isbn = get_field("isbn");
	$pubLink = get_field("publication_link");
	$authors = get_field("other_authors");
	$doi = get_field("doi");
	?>

<div class="book-details grid <?php if(!$thumbnail): echo 'span-full'; endif ;?>">

<?php

	if($thumbnail):
		$alt_text = get_post_meta( get_post_thumbnail_id(), '_wp_attachment_image_alt', true );
		echo '<img itemprop="image" src="' . $thumbnail . '" alt="' . $alt_text . '" width="100" height="100"/>';
	endif;

	echo '<div class="book-content">';

	if( $authors ): 
		echo $authors . '. ';
	endif;

	if( $pages ): 
		echo '<span itemprop="numberOfPages">' . $pages . '</span> pages. ';
	endif;
	
	if( $editors ): 
		echo $editors . '. ';
	endif;

	if( $pubTitle ): 
		echo ' <em itemprop="publication">' . $pubTitle . '</em>, ';
	endif;

	if( $volumeDetails ): 
		echo $volumeDetails . ', ';
	endif;

	if( $publisher ): 
		echo '<span itemprop="publisher">' . $publisher . '</span> ';
	endif;

	if( $pubDate['year'] ): 
		
		echo '(' . $pubDate['year'] . ').';

		if( $pubDate['reprinted']):
			echo	$pubDate['reprinted'] . ' ';
			endif;
	endif;

	if( $isbn): 
		
		echo '<div class="isbn">';

		if( $isbn['issn']):
			echo '<span class="isbn">ISSN: ' .	$isbn['issn'] . '</span> ';
		endif;

		if( $isbn['paperback']):
			echo '<span class="isbn"><strong>Pb</strong> ISBN:<span itemprop="isbn"> ' .	$isbn['paperback'] . '</span></span> ';
		endif;

		if( $isbn['hardback']):
			echo '<span class="isbn"><strong>Hb</strong> ISBN:<span itemprop="isbn"> ' .	$isbn['hardback'] . '</span></span> ';
		endif;

		if( $isbn['ebook']):
			echo '<span class="isbn"><strong>E</strong> ISBN:<span itemprop="isbn"> ' .	$isbn['ebook'] . '</span></span> ';
		endif;

		echo '</div>';

	endif;

	echo '</div>';

	// if( $pubLink ): 
			echo '<div class="book-link"><a class="accent" href="' . get_the_permalink() . '" rel="bookmark">View Publication</a></div>';
			// endif;

	$book_tags = get_the_terms( get_the_ID(), 'book_categories' );
	//print_R($book_tags);
	if($book_tags) {
		echo '<span class="book-tags">';
	
		foreach ($book_tags as $tag) {
		//	$tag_link = get_term_link( $tag );
			echo '<span class="tag">' . $tag->name . '</span>';
		}
	
		echo '</span>';
	}

	

	echo '</div>';
?>

</article>
