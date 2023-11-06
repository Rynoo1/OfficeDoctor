<a name="readme-top"></a>

<!-- PROJECT SHIELDS -->
<!--
*** I'm using markdown "reference style" links for readability.
*** Reference links are enclosed in brackets [ ] instead of parentheses ( ).
*** See the bottom of this document for the declaration of the reference variables
*** for contributors-url, forks-url, etc. This is an optional, concise syntax you may use.
*** https://www.markdownguide.org/basic-syntax/#reference-style-links
-->
![GitHub repo size](https://img.shields.io/github/repo-size/Rynoo1/DrAppointment?color=lightblue)
![GitHub language count](https://img.shields.io/github/languages/count/Rynoo1/DrAppointment?color=lightblue)
![GitHub code size in bytes](https://img.shields.io/github/languages/code-size/Rynoo1/DrAppointment?color=lightblue)


<!-- PROJECT LOGO -->
<br />
<div align="center">
  <a href="https://github.com/github_username/repo_name">

  ![Alt text](img/readme/Group%2085.png)

  </a>

<h3 align="center">The Office Doctor</h3>

  <p align="center">
    Appointment management portal
    <br />
    <a href="https://github.com/github_username/repo_name">View Demo</a>
    ·
    <a href="https://github.com/github_username/repo_name/issues">Report Bug</a>
    ·
    <a href="https://github.com/github_username/repo_name/issues">Request Feature</a>
  </p>
</div>



<!-- TABLE OF CONTENTS -->
<details>
  <summary>Table of Contents</summary>
  <ol>
    <li>
      <a href="#about-the-project">About The Project</a>
      <ul>
        <li><a href="#built-with">Built With</a></li>
      </ul>
    </li>
    <li>
      <a href="#getting-started">Getting Started</a>
      <ul>
        <li><a href="#prerequisites">Prerequisites</a></li>
        <li><a href="#installation">Installation</a></li>
      </ul>
    </li>
    <li><a href="#usage">Usage</a></li>
    <li><a href="#roadmap">Roadmap</a></li>
    <li><a href="#contributing">Contributing</a></li>
    <li><a href="#license">License</a></li>
    <li><a href="#contact">Contact</a></li>
    <li><a href="#acknowledgments">Acknowledgments</a></li>
  </ol>
</details>



<!-- ABOUT THE PROJECT -->
## About The Project

![Alt text](img/readme/Screenshot%202023-11-06%20at%2012.52.02.png)

The Office Doctor is an appointment management portal for a doctor's office that is meant for use by the receptionists. The portal alows receptionists to create, edit and delete doctor profles, patient profiles and appointments. Head receptionsists are also able to edit create and delete receptionist profiles. The project uses the LAMP stack, MySQL for the database and PHP for the connection with the database.

<p align="right">(<a href="#readme-top">back to top</a>)</p>



### Built With

* [![Next][Next.js]][Next-url]
* [![React][React.js]][React-url]
* [![Vue][Vue.js]][Vue-url]
* [![Angular][Angular.io]][Angular-url]
* [![Svelte][Svelte.dev]][Svelte-url]
* [![Laravel][Laravel.com]][Laravel-url]
* [![Bootstrap][Bootstrap.com]][Bootstrap-url]
* [![JQuery][JQuery.com]][JQuery-url]
* LAMP - MySQL, PHP, Apache

<p align="right">(<a href="#readme-top">back to top</a>)</p>



<!-- GETTING STARTED -->
## Getting Started

To get a local copy up and running follow these simple example steps.

### Prerequisites

Before you can get started, ensure you have the following prerequisites:

1. **XAMPP:** You need to have XAMPP (or a similar local web server stack) installed on your system. You can download [XAMPP](https://www.apachefriends.org/index.html) and follow the instructions for your operating system.
2. **MysSQL:** MySQL should be included with your XAMPP installation, but make sure it's running and accessible. You may also use other MySQL setups if you prefer.

### Installation

1. **Clone the Repository:**
```sh
git clone https://github.com/Rynoo1/DrAppointment
```
2. **Navigate to the Project Directory:**
```sh
cd DrAppointment
```
3. **Database Configuration:**
Open the projects `db.php` file, which is responsible for the database connection, and ensure it has the correct database credentials. Modify the following lines:
```sh
$conn = mysqli_connect( "localhost", "your_db_username", "your_db_password", "your_db_name" );
```
4. **Create Database:** Create the database using a MySQL management tool like phpMyAdmin or the command line tool.
5. **Import Database Schema:** Import the schema using phpMyAdmin or using the MySQL command-line tool.
6. **Web Server Configuration:** Make sure your web server (Apache in the case of XAMPP) is correctly configured to serve the project's files.
7. **Start Apache and MySQL:** Start the Apache and MySQL services through XAMPP's control panel or using command-line tools if your not using XAMPP.
8. **Access the Application:** Open your web browser and navigate to the appropriate URL to access the project, the URL may vary depending on the web server configuration.

<p align="right">(<a href="#readme-top">back to top</a>)</p>



<!-- USAGE EXAMPLES -->
## Project Features

The Office Doctor allows the user, the receptionist, to create, update and delete entries on the MySQL database which are read and displayed on the portal. This can only happen once the user's log in details have been checked and authenticated. Multiple user's can have access and log in to the portal, but there are only a few head receptionists that are able to edit the details of the receptionists and create new accounts for new receptionists. Once a user has logged in, they are able to see the appointments for the next month as well as the next three appointments on the home page. From here, the receptionist is able to navigate to the doctor or patient page where they can see all doctors and patients as well as update or delete their profiles or add a new one.

* **View All Doctors**
![alldoctors](img/readme/Screenshot%202023-11-06%20at%2012.53.55.png)

<br/>

* **Add a Patient form**
![addpatient](img/readme/Screenshot%202023-11-06%20at%2012.56.42.png)

<br/>

* **Make a new Appointment**
![newappointment](img/readme/Screenshot%202023-11-06%20at%2013.02.18.png)



<p align="right">(<a href="#readme-top">back to top</a>)</p>



<!-- ROADMAP -->
## Development Process

ERD

The visual concept for the portal was a clean look with an aesthetic that matches the medical environment that this will be used in. To match this medical aesthetic, the primary colour for this design was blue, with white as the secondary.

During the development of this portal, some of the problems and challenges I faced were:
-CRUD Functionalities
--Auto index on tables and minor typos causing issues
--ini_set('display_errors', 1);
-Access control
--using session storage
-Login verification not working
--variables not initialised outside of the loop where they were assigned values
-Login page clears session storage to log out properly


<p align="right">(<a href="#readme-top">back to top</a>)</p>



<!-- CONTRIBUTING -->
<!-- ## Contributing

Contributions are what make the open source community such an amazing place to learn, inspire, and create. Any contributions you make are **greatly appreciated**.

If you have a suggestion that would make this better, please fork the repo and create a pull request. You can also simply open an issue with the tag "enhancement".
Don't forget to give the project a star! Thanks again!

1. Fork the Project
2. Create your Feature Branch (`git checkout -b feature/AmazingFeature`)
3. Commit your Changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the Branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

<p align="right">(<a href="#readme-top">back to top</a>)</p> -->

## Final Outcome
- demo video
- promo video

## Conclusion Footer
- Contribution
- License
- Author
- Acknowledgements

<!-- LICENSE -->
## License

Distributed under the MIT License. See `LICENSE.txt` for more information.

<p align="right">(<a href="#readme-top">back to top</a>)</p>



<!-- CONTACT -->
## Contact

Ryno de Beer - 221361@virtualwindow.co.za

Project Link: [https://github.com/github_username/repo_name](https://github.com/github_username/repo_name)

<p align="right">(<a href="#readme-top">back to top</a>)</p>



<!-- ACKNOWLEDGMENTS -->
## Acknowledgments

* []()
* []()
* []()

<p align="right">(<a href="#readme-top">back to top</a>)</p>



<!-- MARKDOWN LINKS & IMAGES -->
<!-- https://www.markdownguide.org/basic-syntax/#reference-style-links -->
[contributors-shield]: https://img.shields.io/github/contributors/github_username/repo_name.svg?style=for-the-badge
[contributors-url]: https://github.com/github_username/repo_name/graphs/contributors
[forks-shield]: https://img.shields.io/github/forks/github_username/repo_name.svg?style=for-the-badge
[forks-url]: https://github.com/github_username/repo_name/network/members
[stars-shield]: https://img.shields.io/github/stars/github_username/repo_name.svg?style=for-the-badge
[stars-url]: https://github.com/github_username/repo_name/stargazers
[issues-shield]: https://img.shields.io/github/issues/github_username/repo_name.svg?style=for-the-badge
[issues-url]: https://github.com/github_username/repo_name/issues
[license-shield]: https://img.shields.io/github/license/github_username/repo_name.svg?style=for-the-badge
[license-url]: https://github.com/github_username/repo_name/blob/master/LICENSE.txt
[linkedin-shield]: https://img.shields.io/badge/-LinkedIn-black.svg?style=for-the-badge&logo=linkedin&colorB=555
[linkedin-url]: https://linkedin.com/in/linkedin_username
[product-screenshot]: images/screenshot.png
[Next.js]: https://img.shields.io/badge/next.js-000000?style=for-the-badge&logo=nextdotjs&logoColor=white
[Next-url]: https://nextjs.org/
[React.js]: https://img.shields.io/badge/React-20232A?style=for-the-badge&logo=react&logoColor=61DAFB
[React-url]: https://reactjs.org/
[Vue.js]: https://img.shields.io/badge/Vue.js-35495E?style=for-the-badge&logo=vuedotjs&logoColor=4FC08D
[Vue-url]: https://vuejs.org/
[Angular.io]: https://img.shields.io/badge/Angular-DD0031?style=for-the-badge&logo=angular&logoColor=white
[Angular-url]: https://angular.io/
[Svelte.dev]: https://img.shields.io/badge/Svelte-4A4A55?style=for-the-badge&logo=svelte&logoColor=FF3E00
[Svelte-url]: https://svelte.dev/
[Laravel.com]: https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white
[Laravel-url]: https://laravel.com
[Bootstrap.com]: https://img.shields.io/badge/Bootstrap-563D7C?style=for-the-badge&logo=bootstrap&logoColor=white
[Bootstrap-url]: https://getbootstrap.com
[JQuery.com]: https://img.shields.io/badge/jQuery-0769AD?style=for-the-badge&logo=jquery&logoColor=white
[JQuery-url]: https://jquery.com 