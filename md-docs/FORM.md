
## Styling the form

".centerer": centers the form inside the div.

".container0": styles the form and makes it responsive.

".shadow": gives the form a shadow.

    <link rel="stylesheet" href="form.css">
    
    
    
    <div class="centerer">
        <form class="container0 shadow">
        
        </form>
    </div>

## Creating a sub-title

Use a heading tag (most commonly h3) with the "form-subtitle" class.

    <h3 class="form-subtitle">Sub-title</h3>

## Creating a list of options with a unique choice

    <link rel="stylesheet" href="buttons.css">
    
    
    
    <input type="radio" id="radio0" name="myName" value="0">
    <label class="button blue" for="radio0">Option 0</label>
    
    <input type="radio" id="radio1" name="myName" value="1">
    <label class="button blue" for="radio1">Option 1</label>
    
...
    
    <input type="radio" id="radioN" name="myName" value="n">
    <label class="button blue" for="radioN">Option n</label>
    
    

## Creating a criterion (labeled text input)

    <div class="criterion">
        <input>
        <label>Name</label>
    </div>

## Creating a button

".button": makes a non-button element button-like.

".blue": makes the button blue.
".orange": makes the button orange.
".black": makes the button black.

".full": fills the button with its color. Requires a color class.

".hover-full": fills the button with its color when hovered on. Requires a color class.

".big": makes the button big.


    <button class="blue">Button</button>
    <text class="button hover-full orange">Button</text>
    <input type="button" class="big black" value="Button">

## Positioning a single submit option

    <div class="submit">
        <input type="submit" value="Submit">
    </div>

## Positioning multiple options in a row

    <div class="options">
        <text class="button blue">Previous</text>
        <text class="button blue">Next</text>
    </div>
