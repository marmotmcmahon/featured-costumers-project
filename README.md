# Intro

This page highlights an introductory quote from a selection of featured customers. It also displays a responsive grid of lightbox-enabled video testimonials. This video grid contains filter buttons, allowing the user to toggle video categories on and off.


# File Structure

The front page is **customers.php**.

Functions called in customers.php are responsible for each template part; these functions are located in **/template-parts/**.

In the absence of a database, data is currently stored in array form in the **/resources/** directory. Category buttons are dynamically generated based on the content of the array from which they originate, in **/resources/video-card-array.php/**. The resources folder also contains a routing file, **includes.php**.

# Installation & Libraries

A VM is required to host this app locally because it runs on PHP. It also references the CDN-hosted jQuery library.