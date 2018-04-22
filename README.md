Tf-form
=======

This module extends the default Zend Form view helpers (currently just `formRow`) in order to provide some easier to style markup out of the box.

Each form element is wrapped with a div. This div has the class `form-row` for general form styling, plus a class based on the element type (e.g. `form-row-checkbox`). It also has an id based on the form element id but with `-row` appended.

Example:

    <div id="name-row" class="form-row form-row-text">
        <label>
            <span>Name</span>
            <input type="text" name="name" value="">
        </label>
    </div>
