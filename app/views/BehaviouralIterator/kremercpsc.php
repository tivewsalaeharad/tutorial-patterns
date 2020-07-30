<H2>Iterator</H2>
<img src="/public/images/iterator.gif"><br>
Provide a way to access the elements of an aggregate object sequentially without
exposing it underlying representation.  (See also <a href="../STL/iterators.html">STL
Iterators</a> for an example of iterator use with template containers.)
<h3>Applicability</h3>
  <UL>
  <LI>Need to access an aggregate object's contents without exposing its internal
      representation
  <LI>Need to support multiple traversals of aggregate objects
  <LI>Need to provide a uniform interface for traversing different aggregate structures
  </UL>
<h3>Consequences</h3>
  <UL>
  <LI>Supports variation in the traversal of an aggregate
  <LI>Simplifies the Aggregate interface
  <LI>More than one traversal can be pending on an aggregate
  </UL>
