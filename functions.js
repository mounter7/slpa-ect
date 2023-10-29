const tags0 = document.querySelectorAll(".tags-0 label");
const tags1 = document.querySelectorAll(".tags-1 label");

tags0[0].addEventListener("click", () => {
  tags0[0].classList.add("active");
  tags0[1].classList.remove("active");
});

tags0[1].addEventListener("click", () => {
  tags0[1].classList.add("active");
  tags0[0].classList.remove("active");
});

tags1[0].addEventListener("click", () => {
  tags1[0].classList.add("active");
  tags1[1].classList.remove("active");
  tags1[2].classList.remove("active");
  tags1[3].classList.remove("active");
  tags1[4].classList.remove("active");
  tags1[5].classList.remove("active");
});

tags1[1].addEventListener("click", () => {
  tags1[1].classList.add("active");
  tags1[0].classList.remove("active");
  tags1[2].classList.remove("active");
  tags1[3].classList.remove("active");
  tags1[4].classList.remove("active");
  tags1[5].classList.remove("active");
});

tags1[2].addEventListener("click", () => {
  tags1[2].classList.add("active");
  tags1[1].classList.remove("active");
  tags1[0].classList.remove("active");
  tags1[3].classList.remove("active");
  tags1[4].classList.remove("active");
  tags1[5].classList.remove("active");
});

tags1[3].addEventListener("click", () => {
  tags1[3].classList.add("active");
  tags1[1].classList.remove("active");
  tags1[2].classList.remove("active");
  tags1[0].classList.remove("active");
  tags1[4].classList.remove("active");
  tags1[5].classList.remove("active");
});

tags1[4].addEventListener("click", () => {
  tags1[4].classList.add("active");
  tags1[1].classList.remove("active");
  tags1[2].classList.remove("active");
  tags1[3].classList.remove("active");
  tags1[0].classList.remove("active");
  tags1[5].classList.remove("active");
});

tags1[5].addEventListener("click", () => {
  tags1[5].classList.add("active");
  tags1[1].classList.remove("active");
  tags1[2].classList.remove("active");
  tags1[3].classList.remove("active");
  tags1[4].classList.remove("active");
  tags1[0].classList.remove("active");
});