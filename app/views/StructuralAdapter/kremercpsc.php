<H2>Adapter</H2>
Adapter comes in two variants; one based on multiple inheritance:<br>
<img src="/public/images/adapter.gif"><p>
and one making use of delegation:<br>
<img src="/public/images/adapter2.gif"><p>
Convert the interface of a class into another interface clients expect.  Adapter lets
classes work together that couldn't otherwise because of incompatible interfaces.
(See <a href="../STL/containers.html#containerAdaptors">the STL container adaptors</a>
for a good example of adapting template containers.)
<h3>Applicability</h3>
  <UL>
  <LI>Need to using an existing class, but its interface doesn't match
  <LI>Need to make use of incompatible classes
  <LI>(object adapter) Need to use several existing subclasses, but don't what to
      subclass them all
  </UL>
<h3>Consequences</h3>
  <UL>
  <LI>Class adapter commits to the concrete Adapter class: it won't work with Adapter's
      subclasses, but object adapter does.
  <LI>Class adapter introduces only one object and no ponter indirection
  <LI>Object adapter requires quite a bit of work, since all of Adaptee's interface must
      be duplicated.
  </UL>
