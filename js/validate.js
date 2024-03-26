const loginValidator = new JustValidate("#login");

loginValidator
  .addField("#email", [
    {
      rule: "required",
    },
    {
      rule: "email",
    },
  ])
  .addField("#password", [
    {
      rule: "required",
    },
  ])
  .onSuccess((e) => document.querySelector("#login").submit());
