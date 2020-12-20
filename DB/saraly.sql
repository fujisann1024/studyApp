CREATE TABLE positions(
    position_code VARCHAR NOT NULL,
    position_name VARCHAR(50) NOT NULL,
    position_money INTEGER NOT NULL,
    start_day DATE NOT NULL,
    end_day DATE NOT NULL
);

CREATE TABLE teates(
    teate_area VARCHAR(10) NOT NULL,
    rank_code INTEGER NOT NULL,
    teate_money INTEGER NOT NULL
);

CREATE TABLE employees(
    employee_id INTEGER NOT NULL,
    employee_name VARCHAR(50) NOT NULL,
    birthday DATE NOT NULL,
    joining_day DATE NOT NULL,
    leaving_day DATE,
    position_code VARCHAR,
    local_area VARCHAR,
    admin_area VARCHAR
);
