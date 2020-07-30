<H2>Factory Method</H2>
<img src="/public/images/factoryMethod.gif"><br>
Define an interface for creating an object, but let subclasses decide which class to
instantiate.  Factory Method lets a class defer instantiation to subclasses.
<h3>Applicability</h3>
  <UL>
  <LI>A class can't anticipate the class of the objects it must create
  <LI>A class wants its subclasses to specify the objects it creates
  <LI>Need to delegate responsibility to helper subclasses
  </UL>
<h3>Consequences</h3>
  <UL>
  <LI>Provides hooks for subclasses
  <LI>Connects parallel class heirarchies
  </UL>
