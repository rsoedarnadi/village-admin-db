
---

# Village Administration Database System  

This project is a **Village Administration Database System** developed as part of a **Community Service Activity**. The system enables efficient management of village population data and provides statistical summaries such as age distribution, gender count, education level, occupation, and population grouping by RT and RW (administrative regions).  

The system is built using **MySQL** and **PHP** and deployed locally using an **Apache Web Server**.  

---

## Features  
- **Population Data Overview**  
  - Age distribution of village residents  
  - Number of residents grouped by gender (male/female)  
  - Blood type statistics for residents  
  - Educational background summary  
  - Occupation statistics  
  - Marital status distribution  

- **Administrative Grouping**  
  - Population count grouped by **RT** and **RW**  
  - Number of households grouped by **RT** and **RW**  

- **Data Reporting and Dashboard**  
  - Real-time statistics displayed on the homepage  
  - User-friendly interface for data visualization  

---

## Technology Stack  
- **Backend**: PHP  
- **Database**: MySQL  
- **Web Server**: Apache (deployed locally)  
- **Frontend**: HTML, CSS, and basic JavaScript  

---

## SQL Queries Overview  
The project uses multiple SQL queries to generate statistics for the dashboard:  

1. **Age Distribution**  
   ```sql  
   SELECT TIMESTAMPDIFF(YEAR, TGL_LAHIR, CURDATE()) AS USIA, COUNT(NIK) AS COUNT FROM KK_KEL GROUP BY USIA ORDER BY USIA ASC;
   ```  

2. **Gender Count**  
   - **Male**:  
     ```sql  
     SELECT COUNT(NIK) as COUNT FROM KK_KEL WHERE JENIS_KELAMIN='L';
     ```  
   - **Female**:  
     ```sql  
     SELECT COUNT(NIK) as COUNT FROM KK_KEL WHERE JENIS_KELAMIN='P';
     ```  

3. **Blood Type Statistics**  
   ```sql  
   SELECT GOL_DARAH, COUNT(NIK) AS COUNT FROM KK_KEL WHERE GOL_DARAH IS NOT NULL AND GOL_DARAH <> 'TIDAK TAHU' GROUP BY GOL_DARAH ORDER BY GOL_DARAH ASC;
   ```  

4. **Educational Background Summary**  
   ```sql  
   SELECT PEND_TERAKHIR, COUNT(NIK) AS COUNT FROM KK_KEL GROUP BY PEND_TERAKHIR ORDER BY COUNT DESC;
   ```  

5. **Occupation Statistics**  
   ```sql  
   SELECT PEKERJAAN, COUNT(NIK) AS COUNT FROM KK_KEL GROUP BY PEKERJAAN ORDER BY COUNT DESC;
   ```  

6. **Marital Status Distribution**  
   ```sql  
   SELECT STATUS_KAWIN, COUNT(NIK) AS COUNT FROM KK_KEL GROUP BY STATUS_KAWIN ORDER BY STATUS_KAWIN ASC;
   ```  

7. **Households and Population Grouping by RW and RT**  
   ```sql  
   SELECT RW, COUNT(NO_KK) AS COUNT FROM KK_MAIN WHERE RW IS NOT NULL GROUP BY RW;  
   SELECT RT, COUNT(NO_KK) AS COUNT FROM KK_MAIN GROUP BY RT;  
   SELECT RW, COUNT(NIK) AS COUNT FROM KK_KEL LEFT JOIN KK_MAIN ON KK_KEL.NO_KK = KK_MAIN.NO_KK WHERE STATUS_HUB_KEL <> 'KEPALA KELUARGA' AND RW IS NOT NULL GROUP BY RW;  
   SELECT RT, COUNT(NIK) AS COUNT FROM KK_KEL LEFT JOIN KK_MAIN ON KK_KEL.NO_KK = KK_MAIN.NO_KK WHERE STATUS_HUB_KEL <> 'KEPALA KELUARGA' GROUP BY RT;  
   ```  

---

## Usage  
1. **Login** using the provided administrator credentials.  
2. **View real-time statistics** on the homepage dashboard.  
3. **Manage citizen records** by adding, updating, or deleting data.  

---

## Future Improvements  
- Add **chart visualizations** for age distribution, gender count, and occupation statistics.  
- Implement **search and filter functionalities** for easier data access.  
- Provide **export options** for reports (PDF, Excel).  

---

## Acknowledgments  
This project was developed as part of a **Community Service Activity** to assist the village administration in managing citizen data more efficiently. Special thanks to the village administration of Tritis Village in Kulonprogo Regency, Special Region of Yogyakarta, for their support and collaboration.  



Let me know if you want to add database table descriptions or sample screenshots!
