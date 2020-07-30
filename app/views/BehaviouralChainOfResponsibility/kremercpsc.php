<H2>Chain of Responsibility</H2>
<img src="/public/images/chainOfResponsibility.gif"><p>
Avoid coupling the sender of a request to its receiver by giving more than one
object a chance to handle the request.  Chain the receiving objects and pass the
request along the chain until an object handles it.
<h3>Applicability</h3>
  <UL>
  <LI>More than one object may handle the reqest, and the handler isn't known.
  <LI>Need to avoid specifying the reciever of a request explictly.
  <LI>Need to specify the set of handlers dynamically.
  </UL>
<h3>Consequences</h3>
  <UL>
  <LI>Reduces coupling
  <LI>Added flexibility in assigning responsibilities to objects
  <LI>Receipt isn't guaranteed
  </UL>
