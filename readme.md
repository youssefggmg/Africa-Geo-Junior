# Geographic Educational Game: Learning About Africa

This project aims to create an interactive educational tool in the form of a web-based game. Designed for students, the platform will help enhance geographic knowledge by focusing on the African continent, including its countries, capitals, and major cities.

---

## **Project Objectives**

The goal is to design an **interactive educational website** that enables students to:
- Learn about the African continent.
- Test their knowledge of African countries, their capitals, and key cities.

---

## **User Stories**

### **As a designer:**
1. **Create a Use Case Diagram**  
   Identify key functionalities such as:
   - Adding an African country with its key cities, population, and official languages.
   - Editing or deleting existing country information.
   - Viewing detailed information about African countries.

2. **Model the Database**  
   Create an Entity-Relationship Diagram (ERD) that includes:
   - Relationships between countries and their cities.
   - Attributes for entities such as population and languages.

---

### **As a Back-End Developer:**
1. **Design the Database**  
   Build a relational database to handle the following entities:
   - **Countries**: ID, Name, Population, Official Language(s), Continent.
   - **Cities**: ID, Name, Description, Type (e.g., capital or other).

2. **Write SQL Queries**  
   Implement queries for:
   - Adding a country with its population, languages, and cities.
   - Editing the details of a country or city.
   - Deleting a country and all associated cities.
   - Displaying a list of African countries and their details.

3. **Develop Backend Logic**  
   Use **PHP** to:
   - Perform CRUD (Create, Read, Update, Delete) operations on countries and their cities.
   - Dynamically connect and display country information from the database.

---

## **Features**

1. **Add Countries**:  
   Insert African countries along with their population, official languages, and key cities.
   
2. **Edit & Delete Information**:  
   Modify or remove data for countries and cities.

3. **View Countries**:  
   Display detailed information about each African country, including its cities, population, and languages.

4. **Interactive Database Management**:  
   The database is relational, ensuring efficient management of countries and their cities.

---

## **Technologies Used**

- **Database**: MySQL for managing country and city data.
- **Backend Development**: PHP for dynamic interactions and CRUD operations.
- **Frontend**: HTML/CSS/JavaScript (if applicable for enhancing interactivity).

---