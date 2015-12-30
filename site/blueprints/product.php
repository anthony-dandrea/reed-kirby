<?php if(!defined('KIRBY')) exit ?>

title: Product
pages: false
files:
  sortable: true
  type:
    - image
fields:
  title:
    label: Name
    type:  text
    required: true
  pic:
    label: Image (link to uploaded image here)
    type:  textarea
    placeholder: "(image: your_pic.jpg)"
  description:
    label: Description (http://getkirby.com/docs/content/text)
    type:  textarea
  price:
    label: Price
    type: number
    required: true
  instock:
    label: In Stock
    type: checkbox
    text: Is item still available?
  line-1:
    type: line
  select1:
    label: 1st Select Label
    type: text
  select1option1name:
    label: Select 1 Option 1 Name
    type: text
    width: 1/2
  select1option2name:
    label: Select 1 Option 2 Name
    type: text
    width: 1/2
  select1option3name:
    label: Select 1 Option 3 Name
    type: text
    width: 1/2
  select1option4name:
    label: Select 1 Option 4 Name
    type: text
    width: 1/2
  select1option5name:
    label: Select 1 Option 5 Name
    type: text
    width: 1/2
  select1option6name:
    label: Select 1 Option 6 Name
    type: text
    width: 1/2
  line-2:
    type: line
  select2:
    label: 2nd Select Label
    type: text
  select2option1name:
    label: Select 2 Option 1 Name
    type: text
    width: 1/2
  select2option2name:
    label: Select 2 Option 2 Name
    type: text
    width: 1/2
  select2option3name:
    label: Select 2 Option 3 Name
    type: text
    width: 1/2
  select2option4name:
    label: Select 2 Option 4 Name
    type: text
    width: 1/2
  select2option5name:
    label: Select 2 Option 5 Name
    type: text
    width: 1/2
  select2option6name:
    label: Select 2 Option 6 Name
    type: text
    width: 1/2
  line-3:
    type: line
  select3:
    label: 3rd Select Label
    type: text
  select3option1name:
    label: Select 3 Option 1 Name
    type: text
    width: 1/2
  select3option2name:
    label: Select 3 Option 2 Name
    type: text
    width: 1/2
  select3option3name:
    label: Select 3 Option 3 Name
    type: text
    width: 1/2
  select3option4name:
    label: Select 3 Option 4 Name
    type: text
    width: 1/2
  select3option5name:
    label: Select 3 Option 5 Name
    type: text
    width: 1/2
  select3option6name:
    label: Select 3 Option 6 Name
    type: text
    width: 1/2
