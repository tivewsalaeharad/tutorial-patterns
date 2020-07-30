<H2>Flyweight</H2>
<img src="/public/images/flyweight.gif"><p>
Use sharing to support large numbers of fine-grained objects efficiently.
<h3>Applicability</h3>
  <UL>
  <LI>An application uses a large number of objects
  <LI>Storage costs are high because of the sheer quantity of objects
  <LI>Most object state can be made extrinsic
  <LI>Many groups of objects may be replaced by relatively few shared objects
      once extrinsic state is removed
  <LI>The application doesn't depend on object identity
  </UL>
<h3>Consequences</h3>
  <UL>
  <LI>Reduces the number of instances
  <LI>Most of the state must be extrinsic
  </UL>
