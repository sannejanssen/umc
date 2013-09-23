<?php
/**
 * @file
 * Codeblocks for the UMC website.
 *
 */

/*
 * Add footerblock
 */
function umc_block_footer() {

  $block = array(
    'title' => '',
    'content' => '',
  );

  // Add footer content
  $block['content'] = '<ul>';
  $block['content'] .= '<li class="copyright">&copy; Copyright ' . date('Y') . '</li>';
  $block['content'] .= '<li class="pipe">|</li>';
  $block['content'] .= '<li class="company-name">United Music Concepts bvba</li>';
  $block['content'] .= '<li class="pipe">|</li>';
  $block['content'] .= '<li>' . l('info@umconcepts.be', 'mailto:info@umconcepts.be') . '</li>';
  $block['content'] .= '<li class="pipe">|</li>';
  $block['content'] .= '<li>' . l('Contact info', 'http://www.google.be') . '</li>';
  $block['content'] .= '<li class="pipe">|</li>';
  $block['content'] .= '<li>' . l('Facebook', 'https://www.facebook.com/pages/United-Music-Concepts-UMC/142397865837084') . '</li>';

  $block['content'] .= '</ul>';


  // Contact info | Facebook
  
  // Return the block
  return $block;
}