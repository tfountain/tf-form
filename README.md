Tf-form
=======

This module extends the default Zend Form view helpers (currently just `formRow`) in order to provide some better (easier to style with CSS) out-of-the box HTML markup.

Each form element is wrapped with a div which has the class `form-row` for general form styling, plus a class for the element type (e.g. `form-row-checkbox`). It also adds an id based on the form element id but with `-row`.
