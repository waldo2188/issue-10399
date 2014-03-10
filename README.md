Install
-------
in app/config/routing.yml

```yaml
waldo_issue10399:
    resource: "@WaldoIssue10399Bundle/Controller/"
    type:     annotation
    prefix:   /
```


Add in app/AppKernel.php
```php
new Waldo\Issue10399Bundle\WaldoIssue10399Bundle(),
```

For reproduce the issue load this url in a browser : http://localhost/issue-10399/web/app_dev.php/form-must-die/

In the file Waldo\Issue10399Bundle\Form\Type\SubFormType, if we set the option 'inherit_data' to TRUE, the event listner is never call.
But if we don't set this option or if we set to FALSE, the event is trigger.
