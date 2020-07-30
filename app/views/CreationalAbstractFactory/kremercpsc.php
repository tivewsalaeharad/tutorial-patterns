<H2>Abstract Factory</H2>
<img src="/public/images/absractFactory.gif"><br>
Provides an interface for creating families of related or dependent objects without specifying their
concrete classes.
<h3>Applicability</h3>
  <UL>
  <LI>Need to abstract from details of implementation of products
  <LI>Need to have multiple families of products
  <LI>Need to enforce families of products that must be used together
  <LI>Need to hide product implementations and just present interfaces
  </UL>
<h3>Consequences</h3>
  <UL>
  <LI>Isolates concrete classes
  <LI>Makes exchanging product families easy
  <LI>Promotes consistency among products
  <LI>Supporting new kinds (in each family) of products in difficult
  </UL>
