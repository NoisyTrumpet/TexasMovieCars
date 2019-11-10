// import external dependencies
import 'jquery';

// Import everything from autoload
import './autoload/**/*'

// import local dependencies
import Router from './util/Router';
import common from './routes/common';
import home from './routes/home';
import aboutUs from './routes/about';

/** Populate Router instance with DOM routes */
const routes = new Router({
  // All pages
  common,
  // Home page
  home,
  // About Us page, note the change from about-us to aboutUs.
  aboutUs,
});

// Fontawesome Icons
// import then needed Font Awesome functionality
import { config, library, dom } from '@fortawesome/fontawesome-svg-core';
import { faCar, faBars } from '@fortawesome/free-solid-svg-icons';

library.add(faCar, faBars);
config.searchPseudoElements = true;

dom.watch();

// Home Hero JS


// Load Events
jQuery(document).ready(() => routes.loadEvents());
