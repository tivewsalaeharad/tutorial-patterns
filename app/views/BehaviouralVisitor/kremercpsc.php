<H2>Visitor</H2>
<img src="/public/images/visitor.gif"><p>
Represent an operation to be performed on the elements of an object structure.  Visitor
lets you define a new operation without changing the classes of the elements
on which it operates.
<h3>Applicability</h3>
  <UL>
  <LI>Need to perform operations on the objects in a structure, and these objects have differing interfaces
  <LI>Need to perform distrinct and unrelated operations on objects, and you want to avoid "polluting" their
      classes with these operations
  <LI>Need to define new operations over a rarely-changing structure
  </UL>
<h3>Consequences</h3>
  <UL>
  <LI>Makes adding new operations easy
  <LI>Gathers related operations and separates unrelated ones
  <LI>Adding new ConcreteElements is hard
  <LI>Works across objects of differing types
  <LI>Can accumulate state
  <LI>May force a break in encapsulation
  </UL>
